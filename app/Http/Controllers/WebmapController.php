<?php

namespace Webify\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Webify\Children;
use Webify\Room;
use Webify\Observation;
use Webify\Webmap;

class WebmapController extends Controller
{

   
	public function __construct()
    {
        $this->middleware('auth');
    }



	public function getCount($id) {
	    
		$counts = DB::table('webmaps')->select(DB::raw('area, count(*) as count'))->where('child_id','=',$id)->groupBy('area')->get();
		if($counts->isEmpty()) {
			$count = 0; // return an empty count
		}
		else {
			$count = $counts; // assign counts accordingly
		}
		return $count;
	}



    public function show($id)
    {


    	$child = Children::find($id);
        $webs = Webmap::where('child_id',$child->id)->get();
       
        $br = array();
		$counts = $this->getCount($id);

        if(!is_null($child))
        {
            if(!$webs->isEmpty())
            {
                 $i=0;
                foreach ($webs as $web) {
                    $br[$i]=$web->area;
					$i+=1;
                }
            }
                
    		return view('webmap.show',compact('br','child','counts'));
            
        }

        else
            return view('home');



    }

    public function create($id)
    {

    	$child = Children::find($id);
        $webs = Webmap::where('child_id',$child->id)->get();
       
        $br = array();
		$counts = $this->getCount($id);


        if(!is_null($child))
        {
            if(!$webs->isEmpty())
            {
				$i=0;
                foreach ($webs as $web) {
                    $br[$i]=$web->area;
                }
            }
                
			return view('webmap.create',compact('br','child','counts'));
            
        }
    }



    public function store($id)
    {

        //dd($id);
        $child = Children::find($id);
        //$child->area=(int)request('area');
        //$child->save();
        $webs = Webmap::where('area',(int)request('area'))->where('child_id',$id)->get();
        //dd($webs->first()->child_id);
        if($webs->isEmpty())
        {

		$area = (int)request('area');
        return redirect("/observe/edit/$id?area=$area");
        }
        else
        return redirect()->back(); 
    }

	
    public function showroom($id) {
		
		$room = Room::find($id);
		$child = Webmap::find($id);
		$childRoom = $child->child_id;
		$counts = DB::table('webmaps')->select(DB::raw('area, count(*) as count'))->where('room_id','=',$childRoom)->groupBy('area')->get();
	
        return view('webmap.showroom',compact('ar','room','counts'));
		
    }


}
