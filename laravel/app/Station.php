<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
    protected $fillable = [
        'name',
        'company_id',
        'city_id',
    ];
    // Relations
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function city(){
        return $this->belongsTo('App\City');
    }
}
