<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['customer_id', 'kameez_shalwar_id', 'kameez_trouser_id', 'shirt_id', 'two_piece_id',
        'three_piece_id', 'waist_coat_id', 'coat_id', 'sherwani_id', 'prince_coat_id', 'pant_id', 'safari_suite_id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function kameez_shalwar(){
        return $this->belongsTo(KameezShalwar::class);
    }

    public function kameez_trouser(){
        return $this->belongsTo(KameezTrouser::class);
    }

    public function shirt(){
        return $this->belongsTo(Shirt::class);
    }

    public function two_piece(){
        return $this->belongsTo(TwoPiece::class);
    }

    public function three_piece(){
        return $this->belongsTo(ThreePiece::class);
    }

    public function waist_coat(){
        return $this->belongsTo(WaistCoat::class);
    }

    public function coat(){
        return $this->belongsTo(Coat::class);
    }

    public function sherwani(){
        return $this->belongsTo(Sherwani::class);
    }

    public function prince_coat(){
        return $this->belongsTo(PrinceCoat::class);
    }

    public function pant(){
        return $this->belongsTo(Pant::class);
    }

    public function safari_suite(){
        return $this->belongsTo(SafariSuite::class);
    }
}
