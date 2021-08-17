<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KameezTrouser extends Model
{
    protected $fillable = ['length', 'shoulder', 'arm', 'cuff', 'collar_style', 'chest', 'belly', 'hip', 'front_style',
        't_waist', 't_length', 't_hip', 't_bottom', 't_knee'];
}
