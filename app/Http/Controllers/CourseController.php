<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Mail\InteresadoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::orderBy('id','desc')->paginate(8);

        return view('courses.index',compact('courses'));
    }
}
