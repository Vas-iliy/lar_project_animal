<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function dog() {
        return $this->belongsTo('App\Dog');
    }
}
