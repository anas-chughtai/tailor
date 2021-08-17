<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreePiece extends Model
{
    protected $fillable = ['length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'half', 'cross', 'front_style',
        'button_style', 'wc_length', 'wc_shoulder', 'wc_chest', 'wc_belly', 'wc_hip', 'wc_design', 'details', 'tp_p_waist',
        'tp_p_length', 'tp_p_hip', 'tp_p_bottom', 'tp_p_knee'];
}
