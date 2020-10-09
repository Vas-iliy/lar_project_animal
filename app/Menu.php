<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function dog() {
        return $this->belongsTo('App\Dog');
    }

    public function text() {
        return $this->hasMany('App\PagesText');
    }
}
