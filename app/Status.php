<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'status';
    protected $fillable = ['id', 'status_name'];
}

