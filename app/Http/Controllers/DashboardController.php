<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    
    public function home(){
        $user = Auth::user();
        $items = Item::where('report',1)->paginate(8);

        if($user->type == 'AD'){
            return view('dashboard',compact('items'));
        }
        else{
            return redirect()->route('items.index');
        }
        
    }
}
