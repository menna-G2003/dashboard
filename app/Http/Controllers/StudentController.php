<?php
// namespace App\Http\Controllers;
// use App\Http\Requests\StudentRequest;
// use App\Models\Department;
// use App\Models\Student;
// use Illuminate\Http\Request;
// use App\Models\Course;
// use Illuminate\Auth\Events\Validated;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Foundation\Auth\User;
// use Illuminate\Support\Facades\Hash;
// // use App\Http\Middleware\Test;
// class StudentController extends Controller
// {
//         /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */

//     //  public function __construct(){
//     //     $this->middleware('test');
//     //  }
//     public function index()
//     {
//         $students = Student::get(); //select * from student 
//         return view('admin.students.index',compact('students'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         // $departments = Department::get();
//         // ,compact('departments')
//         $students = Student::get();
//         return view('admin.students.create' );
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */


//     public function store(StudentRequest $request)
//     {
//         $data=$request->Validated();
//         $code=$request->code;
//         if($request->hasFile('photo')){
//             $photo=$request->file('photo')->store('images',$code);
//             $data['photo']= $photo;
//         }
//         Student::create($data);
//         return redirect()->back()-> with('msg','added..'); 
//     }


//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//        // $courses= Course::get();
//         $student = Student::findOrFail($id); //select * from student 
//         return view('admin.students.show',compact('student'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $student = Student::findOrFail($id);
//         $departments = Department::get();
//         return view('admin.students.edit',compact('student','departments'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */

//     public function update(StudentRequest $request, $id){
//         $student = Student::findOrFail($id);
//         $data=$request->validated();
//         $code=$request->code;
//         if ($request->hasFile('photo')){
//             $photo=$request->file('photo')->store('images',$code);
//             $data['photo']= $photo;
//         }
//         if(!empty($student->photo)&& Storage::exists($student->photo)){
//                 Storage::delete($student->photo);
//         }

//             $student->update($data);
//             return redirect()->back()->with('msg','udate..'); 
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
// public function destroy($id)
// {
//     $student= Student::findOrFail($id);
//     if(!empty($student->photo)&& Storage::exists($student->photo)){
//         Storage::delete($student->photo);
//         if(empty(Storage::files('images'))){
//             Storage::deleteDirectory('images');
//         }
//     }
//     $student->delete();
//     return redirect()->back()->with('msg','deleted..');
// }
//     public function archive(){
//         $students = Student::onlyTrashed()->get();
//         return view('admin.students.archive',compact('students'));
//     }
//     public function restore($id){
//         $student = Student::withTrashed()->where('code',$id);
//         $student->restore();
//         return redirect()->route('admin.students.index')->with('msg','restored..');
//     }

//     public function destroyArchive($id){ //دي صح 
//         $student = Student::withTrashed()->where('code',$id);
//         $student->forceDelete();
//         return redirect()->back()->with('msg','forceDelete..');
//     }
//     public function addCourses(Request $request, $id){
//         // return $id ."," . $request->all();
//         $student = Student::findOrFail($id);
//         $student->courses()->syncWithoutDetaching($request->courses);
//         return redirect()->back()->with('msg','Added..');
//     }
// }

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        return view('admin.students.index', compact('students'));
    }

    public function show($id)
    {
        // $courses= Course::get();
        $student = Student::findOrFail($id); //select * from student 
        return view('admin.students.show', compact('student'));
    }
    public function create()
    {
        $departments = Department::get();
        return view('admin.students.create', compact('departments'));
    }

    public function store(StudentRequest $request)
    {
        try {
            $data = $request->validated();
            $code = $request->code;

            if ($request->hasFile('photo')) {
                $fileName = time() . '_' . $code . '.' . $request->file('photo')->getClientOriginalExtension();
                $photo = $request->file('photo')->storeAs('images', $fileName);
                $data['photo'] = $photo;
            }

            Student::create($data);
            return redirect()->back()->with('msg', 'Student added successfully!');
        } catch (\Exception $e) {
            report($e); // Log the error for debugging
            return back()->withErrors(['error' => 'An error occurred while adding the student.']);
        }
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $departments = Department::get();
        return view('admin.students.edit', compact('student', 'departments'));
    }
    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $data = $request->validated();
        $code = $request->code;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('images', $code);
            $data['photo'] = $photo;
        }
        if (!empty($student->photo) && Storage::exists($student->photo)) {
            Storage::delete($student->photo);
        }

        $student->update($data);
        return redirect()->back()->with('msg', 'udate..');
    }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if (!empty($student->photo) && Storage::exists($student->photo)) {
            Storage::delete($student->photo);
            if (empty(Storage::files('images'))) {
                Storage::deleteDirectory('images');
            }
        }
        $student->delete();
        return redirect()->back()->with('msg', 'Go to the pending zone to confirm approval..');
    }

    // ... other methods (show, edit, update, destroy, archive, restore, destroyArchive, addCourses)

    // public function addCourses(Request $request, $id)
    // {
    //     $student = Student::find($id); // Use find() to handle missing student

    //     if ($student) {
    //         $student->courses()->syncWithoutDetaching($request->courses);
    //         return redirect()->back()->with('msg', 'Courses added successfully!');
    //     } else {
    //         return back()->withErrors(['error' => 'Student not found.']);
    //     }
    // }


    public function destroyArchive($id)
    { //دي صح 
        $student = Student::withTrashed()->where('code', $id);
        $student->forceDelete();
        return redirect()->back();
    }
    public function archive()
    {
        $students = Student::onlyTrashed()->get();
        return view('admin.students.archive', compact('students'));
    }
    public function restore($id)
    {
        $student = Student::withTrashed()->where('code', $id);
        $student->restore();
        return redirect()->route('admin.students.index')->with('msg', 'restored..');
    }
    public function addCourses(Request $request, $id)
    {
        // return $id ."," . $request->all();
        $student = Student::findOrFail($id);
        $student->courses()->syncWithoutDetaching($request->courses);
        return redirect()->back()->with('msg', 'Added..');
    }
}
