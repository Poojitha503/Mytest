<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App/task;

class mark extends Model
{
    //
    $done = $this->done? 'false':'true';
    $this->done = $done;
    $this->save();
}
