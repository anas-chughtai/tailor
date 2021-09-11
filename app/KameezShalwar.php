<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KameezShalwar extends Model
{
    protected $fillable = ['cus_name', 'length', 'shoulder', 'arm', 'cuff', 'collar_style', 'chest', 'belly', 'hip', 'front_style',
        's_length', 's_bottom', 's_ghara'];
}
