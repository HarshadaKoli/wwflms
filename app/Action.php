<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'action';
    protected $fillable = ['id', 'action_name'];
}

