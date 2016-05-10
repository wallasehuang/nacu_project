<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'nccu_music';
    protected $fillable = ['id','page','count'];
}
