<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class MyPostController extends Controller
{
    
    public function index(){
        $user = Auth::user();

        $items = Item::where('owner',$user->email)->paginate(8);

        return view('Myposts.index',compact('items'));
    }

    public function create(){
        return view('Myposts.create');
    }

    public function store(request $request){

        $request->validate([
            'title'=>'required|regex:"^[A-Za-z0-9\s]+$"',
            'description'=>'required|regex:"^[A-Za-z0-9\s]+$"',
            'career'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
        ]);

        $user = Auth::user();
        $item = new Item();

        $item->title = $request->title;
        $item->description = $request->description;
        $item->career = $request->career;
        $item->price = $request->price;

        $file = $request->file("image");
        $destino = 'image/items/';
        $name = time() . '-' . $file->getClientOriginalName();
        $subir = $request->file("image")->move($destino,$name);

        $item->image = $destino . $name;
        $item->status = 1;
        $item->report = 0;
        $item->owner = $user->email;

        $item->save();
        return redirect()->route('myposts.index');

    }

    public function show(item $item){
        $item = Item::find($item->id);
        
        return view('Myposts.show',compact('item'));
    }

    public function edit(item $item){
        return view('Myposts.edit',compact('item'));
    }

    public function update(request $request,item $item){

        $request->validate([
            'title'=>'required|regex:"^[A-Za-z0-9\s]+$"',
            'description'=>'required|regex:"^[A-Za-z0-9\s]+$"',
            'career'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
        ]);

        $item->title = $request->title;
        $item->description = $request->description;
        $item->career = $request->career;
        $item->price = $request->price;
        $file = $request->file("image");
        $destino = 'image/items/';
        $name = time() . '-' . $file->getClientOriginalName();
        $subir = $request->file("image")->move($destino,$name);

        $item->image = $destino . $name;
        $item->status = 1;

        $item->save();
        return redirect()->route('myposts.show',$item);
    }

}
