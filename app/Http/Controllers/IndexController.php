<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends SiteController
{

    public function __construct()
    {
        parent::__construct(new \App\Repositories\MenuRepository(new \App\Menu));

        $this->template = env('THEME') . '.index';

    }

    public function index() {
        return $this->renderOutput();
    }
}
