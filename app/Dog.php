<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function menu() {
        return $this->hasOne('App\Menu');
    }
}
