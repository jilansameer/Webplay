<?php

namespace Webify\Http\Controllers;

use Illuminate\Http\Request;
use Webify\Children;
use Webify\Room;
class ChildrenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

    	$rooms = Room::get();
        return view('child.create',compact('rooms'));

    }

    public function store(Request $req)
    {
    

		
       //dd("what's going on");

		//dd(request(['first_name','gender']));
		$req->validate([

     		'first_name' => 'required',
     		'last_name' => 'required',
     		'gender' => 'required',
     		'room_name' => 'required',
     		'date_of_birth' => 'required',
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     		
     	]);
     	
     	
     	$child = new Children;
     	$room = Room::where('room_name',request('room_name'))->get();
     	$child->first_name= request('first_name');
     	$child->last_name= request('last_name');
     	$child->room_id=$room[0]->id;
     	$child->room_name= request('room_name');
     	$child->gender= request('gender');
     	$child->date_of_birth= request('date_of_birth');
     	$child->about= request('about');
     	$child->user_id= auth()->id() ;
     	$child->save();




       // $this->validate($request, [
        //'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //]);

    if ($req->hasFile('input_img')) {
        $image = $req->file('input_img');
       // $name = time().'.'.$image->getClientOriginalExtension();
        //$fileName = Input::get('rename_to');
        $destinationPath = public_path("/images/{$child->id}");
        $image->move($destinationPath, "pic");
        //$this->save();

        //return back()->with('success','Image Upload successfully');
    }



     	/*
     	Children::create([


            
            
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'room_name' => request('room_name'),
            'gender' => request('gender'),
            'date_of_birth' => request('date_of_birth'),
            'about' => request('about'),
            'user_id' => auth()->id()                       
        ]);*/
        
       //($child->id);
        return view('child.show',compact('child'));
    }


    public function show($id){

    	$child = \Webify\Children::find($id);
    	return view('child.show',compact('child'));
    }

    public function update($id,Request $req)
    {

    	$child = \Webify\Children::find($id);
    	$child->update([
    		'first_name'=> $req->first_name,
    		'last_name'=>  $req->last_name
    	]);
    	
    	return view('child.show',compact('child'));
    }

    public function editview($id){

    	$child = \Webify\Children::find($id);
    	return view('child.edit',compact('child'));
    }

}
