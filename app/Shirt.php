<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    protected $fillable = ['cus_name', 'length', 'shoulder', 'arm', 'cuff', 'collar_style', 'chest', 'belly', 'hip', 'design'];
}
