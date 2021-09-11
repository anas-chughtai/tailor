<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sherwani extends Model
{
    protected $fillable = ['cus_name', 'length', 'shoulder', 'arm', 'cuff', 'chest', 'belly', 'hip', 'ban', 'half', 'cross',
        'design', 'embroidery'];
}
