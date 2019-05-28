<?php

namespace Webify\Http\Controllers;

use Illuminate\Http\Request;
use Webify\Room;
class RoomController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
		return view('rooms.create');
		
		}
	public function store(Request $request)
	{

		
		//dd(request(['room_name','info']));
		$request->validate([

     		'room_name' => 'required',
     		'info'  => 'required'
     	]);
     	
     	//dd("what's going on");

     	Room::create([

            'room_name' => request('room_name'),
            'info' => request('info'),
            'user_id' => auth()->id()      
        ]);
        $rooms = Room::get();
        
        return view('child.create',compact('rooms'));
        
	}
    public function show($id)
    {


        $room = Room::find($id);
        $childs=$room->childrens;
        //dd(count($childs));
        return view('rooms.show',compact('childs','room'));
    }

    public function showall()
    {

        $rooms = Room::all();
        return view('rooms.showall',compact('rooms'));
    }
}
