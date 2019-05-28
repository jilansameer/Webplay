<?php

namespace Webify;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
     protected $fillable =['child_id','area','date','plan','question','reflect','description'];
}
