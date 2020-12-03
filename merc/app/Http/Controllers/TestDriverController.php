<?php

namespace App\Http\Controllers;

use App\Service\TestDriverService;
use Illuminate\Http\Request;

class TestDriverController extends Controller
{
    //
    protected $testDriver;

    public function __construct(TestDriverService $testDriverService)
    {
        $this->testDriver = $testDriverService;
    }

    public function getAll()
    {
        $testDriversList = $this->testDriver->getAll();
        return view('admin.test-driver-list', compact('testDriversList'));
    }

    public function getAllById($id)
    {
        $abc = $this->testDriver->getAllById($id);
    }
}
