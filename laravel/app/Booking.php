<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable = [
        'code',
        'user_id',
        'journey_id',
        'company_id',
        'car_id',
    ];
    // Relations
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function journey(){
        return $this->belongsTo('App\Journey');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function car(){
        return $this->belongsTo('App\Car');
    }
}
