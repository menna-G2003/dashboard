<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController1 extends Controller
{
    // public function index(){
    //     all Teachers view
    //    $students = Student::get(); //select * from student 
    //     return view('admin.students.index',compact('students'));
    // }

    //  public function show($id){
    //     $student = Student::findOrFail($id); //select * from student 
    //     return view('admin.students.show',compact('student'));
    //     // return $students;
    // }

    // public function edit($id){
    //     $student = Student::findOrFail($id);
    //     $departments = Department::get();
    //     return view('admin.students.edit',compact('student','departments'));
    // }

    // public function create(){
    //     $departments = Department::get();
    //     return view('admin.students.create' ,compact('departments'));
    // }

    // public function store(StudentRequest $request){//save data
    //      // add store view
    //       //save();  reg methode 
    //      //create();  static method
    //      //  $student = new Student();
    //      //  $student->code=$request->code ;
    //      //  $student->name=$request->name ;
    //      //  $student->email=$request->email ;
    //      //  $student->password=$request->password ;
    //      //  $student->phone=$request->phone ;
    //      //  $student->subject=$request->subject ;
    //      //  $student->dept_id=$request->dept_id ;
    //      //  $student->save();
    // //  Student::create([
    // //     'code'=> $request->code,
    // //     'name'=> $request->name,
    // //     'email'=> $request->email,
    // //     'password'=> $request->password,
    // //     'phone'=> $request->phone,
    // //     'subject'=>$request->subject ,
    // //     'dept_id'=>$request->dept_id 
    // // ]);
    //  return redirect()->back()->with('msg','added..'); 
    //  //return 'requested scuess';       
    // }

    // public function update(StudentRequest $request, $id){
    //     $student = Student::findOrFail($id);
    //     $student->update([
    //     'name'=> $request->name,
    //     'email'=> $request->email,
    //     'password'=> $request->password,
    //     'phone'=> $request->phone,
    //     'subject'=>$request->subject ,
    //     'dept_id'=>$request->dept_id 
    //     ]);
    //     return redirect()->back()->with('msg','udate..'); 
    //}
    // public function destroy($id){
    //     // return view('admin.students.destroy');
    //     $student= Student::findOrFail($id);
    //     $student->delete();
    //     return redirect()->back()->with('msg','deleted..');
    // }
    // public function archive(){
    //     $students = Student::onlyTrashed()->get();
    //     return view('admin.students.archive',compact('students'));
    // }
    // public function restore($id){
    //     $student = Student::withTrashed()->where('code',$id);
    //     $student->restore();
    //     return redirect()->route('admin.students.index')->with('msg','restored..');
    // }
    
    // public function destroyArchive($id){ //دي صح 
    //     $student = Student::withTrashed()->where('code',$id);
    //     $student->forceDelete();
    //     return redirect()->back()->with('msg','forceDelete..');
    // }
}