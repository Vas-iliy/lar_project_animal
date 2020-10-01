<?php

namespace App\Http\Controllers;

use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexController extends SiteController
{

    public function __construct(SliderRepository $s_rep)
    {
        parent::__construct(new \App\Repositories\MenuRepository(new \App\Menu));

        $this->one_page = '.home';
        $this->template = env('THEME') . $this->one_page . '.index';

        $this->s_rep = $s_rep;

    }

    public function index() {
        $slider_content = $this->getSlider();
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        return $this->renderOutput();
    }

    public function getSlider() {
        $slider_content = $this->s_rep->get('*');

        return $slider_content;
    }
}
