<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{
    protected $fillable = ['cus_name', 'waist', 'length', 'hip', 'bottom', 'knee'];
}
