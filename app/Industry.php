<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'industry';
    protected $fillable = ['id', 'industry_name'];
}

