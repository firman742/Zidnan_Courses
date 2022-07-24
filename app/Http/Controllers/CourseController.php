<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        return view('frontend.courses', [
            "title" => "Courses",
            "courses" => Course::all()
    
        ]);
    }

    public function show(Course $course){
        return view('frontend.course', [
            "course" => $course
        ]);
    }
}
