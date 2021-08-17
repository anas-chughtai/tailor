<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrinceCoat extends Model
{
    protected $fillable = ['length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'ban', 'half', 'cross',
        'front_style', 'details', 'p_waist', 'p_length', 'p_hip', 'p_bottom', 'p_knee'];
}
