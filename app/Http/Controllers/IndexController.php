<?php

namespace App\Http\Controllers;

use App\Repositories\DogRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexController extends SiteController
{

    public function __construct(SliderRepository $s_rep, PeopleRepository $p_rep, DogRepository $d_rep)
    {
        parent::__construct(new \App\Repositories\MenuRepository(new \App\Menu));

        $this->one_page = '.home';
        $this->template = env('THEME') . $this->one_page . '.index';

        $this->s_rep = $s_rep;
        $this->p_rep = $p_rep;
        $this->d_rep = $d_rep;

    }

    public function index() {
        $slider_content = $this->getSlider();
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $people = $this->getPeople();
        $dogs = $this->getDogs(config('settings.col_dogs'));

        $content = view(env('THEME') . $this->one_page . '.content', compact(['people', 'dogs']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getSlider() {
        $slider_content = $this->s_rep->get('*');

        return $slider_content;
    }

    public function getPeople() {
        $people = $this->p_rep->get('*');

        return $people;
    }

    public function getDogs($take) {
        $dogs = $this->d_rep->get('*', $take);

        return $dogs;
    }
}
