<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'days',
        'user_id',
        'journey_id',
    ];
    // Relations
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function journeys(){
        return $this->belongsTo('App\Journey');
    }
}
