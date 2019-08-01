<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'bank';
    protected $fillable = ['id', 'bank_name'];
}

