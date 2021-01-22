<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Mail\InteresadoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::orderBy('id','desc')->paginate(8);

        return view('questions.index',compact('questions'));
    }
}
