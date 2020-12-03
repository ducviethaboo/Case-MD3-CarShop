<?php


namespace App\Service;


use App\Repository\TestDriverRepo;

class TestDriverService
{
    protected $testDriverService;

    public function __construct(TestDriverRepo $testDriverRepo)
    {
        $this->testDriverService = $testDriverRepo;
    }

    public function registerTestDriverService($testDriverInfo)
    {
        $this->testDriverService->registerTestDriver($testDriverInfo);
    }
}
