<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $table = 'treatment';

    public function patient(){
        return $this->belongsTo('App\Patient');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }

    public function hospital(){
        return $this->belongsTo('App\Hospital');
    }
}
