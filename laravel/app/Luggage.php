<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    //
    protected $fillable = [
        'description',
        'luggages_type_id',
        'user_id',
        'journeys_users_id',
    ];
    // Relations
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function luggagesType(){
        return $this->belongsTo('App\LuggagesType');
    }
    public function journeyUser(){
        return $this->belongsTo('App\JourneyUser');
    }
}
