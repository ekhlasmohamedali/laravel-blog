<?php

namespace App\Http\Controllers\Admin;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    public function index()
    {

   $students=Student::get();

  return view('admin.students.index', compact('students'));
  
   
    
}

public function show($id)
{
    $student = Student::find($id);

    return view('admin.students.information', compact('student'));
}


















}