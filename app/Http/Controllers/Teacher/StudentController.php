<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;

class StudentController extends Controller
{

    protected $redirectTo = '/teacher/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('teacher.auth:teacher');
    }

    /**
     * Show the Teacher dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rows = Student::where('school_id',auth('teacher')->user()->school_id)->latest()->get();
        return view('teacher.students.index', compact('rows'));
    }

}
