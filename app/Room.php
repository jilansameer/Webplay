<?php

namespace Webify;

use Illuminate\Database\Eloquent\Model;
use Webify\Children;

class Room extends Model
{
    protected $fillable =['room_name','info','user_id'];
    public function childrens()
    {
		return $this->hasMany('Webify\Children');
		
		}
}
