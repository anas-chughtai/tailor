<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwoPiece extends Model
{
    protected $fillable = ['length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'half', 'cross', 'front_style',
        'button_style', 'details', 'two_pcs_p_waist', 'two_pcs_p_length', 'two_pcs_p_hip', 'two_pcs_p_bottom', 'two_pcs_p_knee'];
}
