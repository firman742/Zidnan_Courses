<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend.home', [
            "title" => "Home",
            "course" => Course::all()
    
        ]);
    }
}
