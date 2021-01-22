<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Mail\InteresadoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::orderBy('id','desc')->paginate(8);

        return view('eventos.index',compact('events'));
    }
}
