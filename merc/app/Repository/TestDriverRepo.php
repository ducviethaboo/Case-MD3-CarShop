<?php


namespace App\Repository;


use App\Models\TestDrivers;
use Illuminate\Support\Facades\DB;

class TestDriverRepo
{
    public function registerTestDriver($testDriverInfo)
    {
        $testDriver = new TestDrivers();
        $testDriver->fill($testDriverInfo);
        $testDriver->save();
    }

    public function getAll()
    {
        return DB::table('testdrivers')
            ->join('users', 'testdrivers.userTest', '=', 'users.id')
            ->join('products', 'testdrivers.productTest', '=', 'products.id')
            ->select('users.name', 'users.id', 'users.email', 'users.phone', 'products.productName', 'testdrivers.status', 'testdrivers.testDate')
            ->get();
    }

    public function getAllById($id)
    {
        return DB::table('testdrivers')
            ->join('users', 'testdrivers.userTest', '=', 'users.id')
            ->join('products', 'testdrivers.productTest', '=', 'products.id')
            ->select('users.name', 'users.id', 'users.email', 'users.phone', 'products.productName', 'testdrivers.status', 'testdrivers.testDate')
            ->where('users.id', '=', $id)
            ->get();
    }

    public function updateStatus($id, $status)
    {
         DB::table('testdrivers')->where('userTest', '=', $id)
            ->update(['status' => $status]);
    }
}
