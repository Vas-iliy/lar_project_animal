<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagesText extends Model
{
    protected $table = 'pages_texts';

    public function menu() {
        return $this->belongsTo('App\Menu');
    }
}
