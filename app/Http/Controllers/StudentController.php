<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudents()
    {
        $students = Student::all();
        return Response::Json($students);   
    }
    public function showStudents()
    {
        $students = Student::all();
        return view('students',["students"=>$students]);
    }
    public function getStudentById($id)
    {
        $students= Student::find($id);
        return Response::Json($students);
    }
}
