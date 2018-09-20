<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';

    public function treatment(){
        return $this->hasMany('App\Treatment');
    }
}
