<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class task extends Model
{
   protected $fillable=['id','user_id','taskname','taskdescirption','done'];
   protected $table ='task';
   public function user()
   {
   	 return $this->belongsTo('App\User');
   }
}
