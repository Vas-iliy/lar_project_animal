<?php

namespace App\Http\Controllers;

use App\Repositories\DogRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;

class AboutController extends SiteController
{
    public function __construct(SliderRepository $s_rep, DogRepository $d_rep, PeopleRepository $p_rep)
    {
        parent::__construct(new \App\Repositories\MenuRepository(new \App\Menu), new \App\Repositories\ContactsRepository(new \App\Contact));

        $this->one_page = '.about';
        $this->template = env('THEME') . $this->one_page . '.about';

        $this->d_rep = $d_rep;
        $this->p_rep = $p_rep;
        $this->s_rep = $s_rep;
    }

    public function index() {
        $where = ['page', 'about'];
        $content_slider = $this->getSlider($where);
        $slider = view(env('THEME') . $this->one_page . '.slider', compact('content_slider'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $dogs = $this->getDogs(config('settings.col_dogs_about'));
        $people = $this->getPeople();

        $content = view(env('THEME') . $this->one_page . '.content_about', compact(['dogs', 'people']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getSlider($where) {
        $slider = $this->s_rep->get('*', false, false, $where);

        return $slider;
    }

    public function getDogs($take) {
        $dogs = $this->d_rep->get('*', $take);

        return $dogs;
    }

    public function getPeople() {
        $people = $this->p_rep->get('*');

        return $people;
    }
}
