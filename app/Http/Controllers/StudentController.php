<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students  = Student::with('profile')->find(1);
        return response($students,200);
    }
}
