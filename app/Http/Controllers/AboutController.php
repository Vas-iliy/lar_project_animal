<?php

namespace App\Http\Controllers;

use App\Repositories\ArticlesRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderAboutRepository;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AboutController extends SiteController
{
    public function __construct(SliderAboutRepository $s_rep, DogRepository $d_rep, PeopleRepository $p_rep)
    {
        parent::__construct(new \App\Repositories\MenuRepository(new \App\Menu), new \App\Repositories\ContactsRepository(new \App\Contact));

        $this->one_page = '.about';
        $this->template = env('THEME') . $this->one_page . '.about';

        $this->d_rep = $d_rep;
        $this->p_rep = $p_rep;
        $this->about_s_rep = $s_rep;
    }

    public function index() {
        $content_slider = $this->getSlider();
        $slider = view(env('THEME') . $this->one_page . '.slider', compact('content_slider'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $dogs = $this->getDogs(config('settings.col_dogs_about'));
        $people = $this->getPeople();

        $content = view(env('THEME') . $this->one_page . '.content_about', compact(['dogs', 'people']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getSlider() {
        $slider = $this->about_s_rep->get('*');

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
