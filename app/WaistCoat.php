<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaistCoat extends Model
{
    protected $fillable = ['neck', 'length', 'shoulder', 'chest', 'belly', 'hip', 'design', 'front_style'];
}
