<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{
    protected $fillable = ['waist', 'length', 'hip', 'bottom', 'knee'];
}
