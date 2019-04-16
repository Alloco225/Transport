<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
    ];
    // Relations
    public function stations(){
        return $this->hasMany('App\Station');
    }
    public function users(){
        return $this->hasMany('App\User');
    }
}
