<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class websitController extends Controller
{
    public function index(){
        $course=Course::get();
        
        return view('website.index',compact('courses'));
    }
    public function about(){
        $course=Course::get();
        return view('website.about');
    }
}
