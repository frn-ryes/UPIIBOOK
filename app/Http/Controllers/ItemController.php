<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Mail\InteresadoMailable;
use Illuminate\Support\Facades\Mail;


class ItemController extends Controller
{
    
    public function index(request $request){

        if($request->search == ''){
            $items = Item::orderBy('id','desc')->paginate(8);
            return view('views/items.index',compact('items'));
        }else{
            
            $items = Item::where("title","like",'%'.$request->search.'%')
                            ->orderBy('id','desc')->paginate(8);

            return view('items.index',compact('items'));
        }

    }

    public function create(){
        return view('items.create');
    }

    public function store(request $request){

        $request->validate([
            'title'=>'required'
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
        $item->owner = $user->email;

        $item->save();
        return redirect()->route('items.index');

    }

    public function show(item $item){
        $item = Item::find($item->id);
        
        return view('items.show',compact('item'));
    }
/*
    public function edit(item $item){
        return view('items.edit',compact('item'));
    }

    public function update(request $request,item $item){

        $item->title = $request->title;
        $item->description = $request->description;
        $item->career = $request->career;
        $item->price = $request->price;
        $file = $request->file("image");
        $destino = 'image/items/';
        $name = time() . '-' . $file->getClientOriginalName();
        $subir = $request->file("image")->move($destino,$name);

        $item->image = $destino . $name;
        $item->status = 5;

        $item->save();
        return redirect()->route('items.show',$item);
    }
*/
    public function report(item $item){

        $item->title = $item->title;
        $item->description = $item->description;
        $item->career = $item->career;
        $item->price = $item->price;
        $item->image = $item->image;
        $item->status = 5;
        $item->owner = $item->owner;
        $item->report = 1;

        $item->save();
        return redirect()->route('items.index');
    }

    public function interesado(item $item){

        $correo = new InteresadoMailable($item);
        $destinatario = $item->owner;
        Mail::to($destinatario)->send($correo);
        
        return redirect()->route('items.index');
    }
}
