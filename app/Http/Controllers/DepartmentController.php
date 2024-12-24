<?php
namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
class DepartmentController extends Controller
{
    public function show($id){
    //     $departments = Department::get(); 
    //     $departments = Department::findOrFail($id);
    //     $student= $departments->student()->pluck('name');
    //       return view('admin.departments.show', compact('department','student'));
    $departments = Department::findOrFail($id); //select * from student 
        return view('admin.departments.show',compact('departments'));
     }
}