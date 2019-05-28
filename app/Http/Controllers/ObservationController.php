<?php

namespace Webify\Http\Controllers;

use Illuminate\Http\Request;
use Webify\Observation;
use Webify\Children;
use Webify\Room;
use Webify\Webmap;

class ObservationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create($id)
    {

    	$child = Children::find($id);
    	$area=(int)request('area');
    	return view('observe.create',compact('child','area'));
    }

    public function show($id)
    {

    	$child=Children::find($id);
    	$obser = Observation::where('area',request('area'))->whereRaw('child_id',$id)->get()->first();
    	return view('observe.show',compact('obser','child'));

    }

    public function store($id,Request $req)
    {


		$req->validate([

            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'description' => 'required',
			'date' => 'required',

     	]);

		$area=(int)request('area');
		$current_child=$id;

    	$obser=new Observation;
    	$child=Children::find($id);
    	$obser->child_id=$current_child;
    	$obser->area=$area;

		$web=new Webmap;
        $web->child_id=$current_child;
        $web->room_id=$child->room_id;
        $web->area=$area;
        

    	if(request('typ')=="Plan")
    		$obser->plan=request('description');
    	else if(request('typ')=="Act")
    		$obser->act=request('description');
    	else if(request('typ')=="Question")
    		$obser->question=request('description');
    	else if(request('typ')=="Reflect")
    		$obser->reflect=request('description');

    	$obser->description=request('picdescription');
    	$obser->date=request('date');

		
    	$obser->save(); // only save the observation and web map data once all fields have been successfully entered 
		$web->save();

    	if ($req->hasFile('input_img')) {
        $image = $req->file('input_img');
       // $name = time().'.'.$image->getClientOriginalExtension();
        //$fileName = Input::get('rename_to');
        $destinationPath = public_path("/images/{$child->id}/{$obser->area}/Observation");
        $image->move($destinationPath, "pic");
        //$this->save();

        //return back()->with('success','Image Upload successfully');
        return view("observe.show",compact('obser','child'));
       }

    }
}
