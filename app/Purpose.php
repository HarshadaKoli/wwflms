<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'purpose';
    protected $fillable = ['id', 'purpose_name'];
}

