<?php

namespace App\Http\Controllers;

use App\Contracts\Employee;
use App\Services\Developer;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function welcome(Employee $employee)
    {
        $employee->work();
    }
}
