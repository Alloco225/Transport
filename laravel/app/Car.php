<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = [
        'plate_number',
        'company_id',
    ];
    // Relations
    public function companies(){
        return $this->belongsTo('App\Company');
    }
}
