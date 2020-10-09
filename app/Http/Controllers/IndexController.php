<?php

namespace App\Http\Controllers;

use App\Menu;
use App\PagesText;
use App\Repositories\ArticlesRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;

class IndexController extends SiteController
{

    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, SliderRepository $s_rep, PeopleRepository $p_rep, DogRepository $d_rep, ArticlesRepository $a_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);

        $this->one_page = '.home';
        $this->template = env('THEME') . $this->one_page . '.index';

        $this->s_rep = $s_rep;
        $this->p_rep = $p_rep;
        $this->d_rep = $d_rep;
        $this->a_rep = $a_rep;
    }

    public function index() {
        $where = ['page', 'home'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME')  . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $dog = $this->d_rep->one(['breed', 'German Shepherd']);
        $people = $this->getPeople();
        $dogs = $this->getDogs(config('settings.col_dogs'));

        $order = ['id', 'desc'];
        $articles = $this->getArticles(config('settings.col_articles'), $order);

        $text = $this->getText($where);
        $text = $text->text;

        $content = view(env('THEME') . $this->one_page . '.content', compact(['dog', 'people', 'dogs', 'articles', 'text']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getArticles($take, $order) {
        $articles = $this->a_rep->get('*', $take, false, false, $order);

        return $articles;
    }



}
