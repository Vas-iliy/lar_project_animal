<?php

namespace App\Http\Controllers;

use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;

class AboutController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, SliderRepository $s_rep, DogRepository $d_rep, PeopleRepository $p_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);

        $this->one_page = '.about';
        $this->template = env('THEME') . $this->one_page . '.about';

        $this->d_rep = $d_rep;
        $this->p_rep = $p_rep;
        $this->s_rep = $s_rep;
    }

    public function index() {
        $where = ['page', 'about'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $dogs = $this->getDogs(config('settings.col_dogs_about'));
        $people = $this->getPeople();

        $content = view(env('THEME') . $this->one_page . '.content_about', compact(['dogs', 'people']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
