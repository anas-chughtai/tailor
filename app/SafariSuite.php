<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafariSuite extends Model
{
    protected $fillable = ['cus_name', 'length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'ban', 'half', 'cross',
        'design', 'button_style'];
}
