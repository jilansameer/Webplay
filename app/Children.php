<?php

namespace Webify;

use Illuminate\Database\Eloquent\Model;
use Webify\Room;

class Children extends Model
{
    //
    protected $fillable =['first_name','last_name','gender','room_name','date_of_birth','about','user_id'];
    public function room()
    {
		return $this->belongsTo('Webify\Room');
		
		}
}
