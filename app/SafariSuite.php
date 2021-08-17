<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafariSuite extends Model
{
    protected $fillable = ['length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'ban', 'half', 'cross',
        'design', 'button_style'];
}
