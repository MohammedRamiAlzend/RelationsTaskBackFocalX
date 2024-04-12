<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function index()
    {
        $departments = Department::with('employee')->find(1);

        return response($departments,200);
    }
}
