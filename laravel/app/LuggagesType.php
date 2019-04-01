<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuggagesType extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    // Relations
    public function luggages(){
        return $this->hasMany('App\Luggage');
    }
}
