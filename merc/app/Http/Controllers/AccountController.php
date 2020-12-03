<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Service\AccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    protected $accountService;
    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    //
    public function registerAccount(RegisterRequest $request)
    {
        $user = new User();
        $newAccount = $request->all();
        $password = Hash::make($request->password);
        $user->fill($newAccount);
        $user->password = $password;
        $user->role = 'User';
        $user->save();
        return redirect()->route('home');
    }

    public function getAllAccount()
    {
       $accounts =  $this->accountService->getAllAccountService();
       return view('admin.account', compact('accounts'));
    }

    public function findById($id)
    {
       return $this->accountService->findByIdService($id);
    }

    public function showFormEditUserRole($id)
    {
        $account = $this->findById($id);
        return view('admin.edit-account', compact('account'));
    }

    public function editUserRole(Request $request)
    {
        $role = $request->role;
        $id = $request->id;
        $this->accountService->editUserRoleService($role, $id);
        return redirect()->route('admin.account');
    }

    public function deleteAccount($id)
    {
        $this->accountService->deleteAccount($id);
        return redirect()->route('admin.account');
    }

    public function getAccountDetail()
    {
        return view('user.account-detail');
    }

    public function showAccounntInfoHeader($id)
    {
        $account = $this->accountService->findByIdService($id);
        return view('core.header', compact('account'));
    }
}
