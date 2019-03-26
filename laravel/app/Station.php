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
    public function companies(){
        return $this->belongsTo('App\Company');
    }
    public function cities(){
        return $this->belongsTo('App\City');
    }
}
