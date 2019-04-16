<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    //
    protected $fillable = [
        'code',
        'date',
        'departure_time',
        'departure_station_id',
        'arrival_station_id',
        'company_id',
    ];
    // Relations
    public function companies(){
        return $this->belongsTo('App\Company');
    }
    public function departure_station(){
        return $this->belongsTo('App\Station');
    }
    public function arrival_station(){
        return $this->belongsTo('App\Station');
    }
}
