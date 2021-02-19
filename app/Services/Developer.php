<?php

namespace App\Services;

use App\Contracts\Employee;

class Developer implements Employee
{
    public function work()
    {
        echo "Xin chao dev";
    }
}
