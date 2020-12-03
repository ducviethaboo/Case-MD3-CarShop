<?php


namespace App\Repository;


use App\Models\TestDrivers;

class TestDriverRepo
{
    public function registerTestDriver($testDriverInfo)
    {
        $testDriver = new TestDrivers();
        $testDriver->fill($testDriverInfo);
        $testDriver->save();
    }
}
