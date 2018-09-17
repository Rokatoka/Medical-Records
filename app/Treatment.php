<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $table = 'treatment';

    public function patient(){
        return $this->belongsTo('App\Patient');
    }
}
