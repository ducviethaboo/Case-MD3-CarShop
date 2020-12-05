<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Service\TestDriverService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $testDriverController;
    public function __construct(TestDriverService $testDriverService)
    {
        $this->testDriverController = $testDriverService;
    }

    public function testDriverRegister(Request $request)
    {
        $testDriverInfo = $request->all();
        $this->testDriverController->registerTestDriverService($testDriverInfo);
    }
}
