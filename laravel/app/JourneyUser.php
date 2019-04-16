<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JourneyUser extends Model
{
    //
    protected $fillable = [
        'code',
        'journey_id',
        'user_id',
    ];
    // Relations
    public function journey(){
        return $this->belongsTo('App\Journey');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function luggages(){
        return $this->hasMany('App\Luggage');
    }
}
