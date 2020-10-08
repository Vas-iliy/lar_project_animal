<?php

namespace App\Http\Controllers;

use App\Repositories\ArticlesRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;

class ArticleController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, PeopleRepository $p_rep, SliderRepository $s_rep, ArticlesRepository $a_rep, DogRepository $d_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);
        $this->one_page = '.blog';
        $this->template = env('THEME') . $this->one_page . '.blog';

        $this->s_rep = $s_rep;
        $this->a_rep = $a_rep;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $where = ['page', 'blog'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $pages = $this->getArticles();
        $content = view(env('THEME') . $this->one_page .'.content_blog', compact('pages'));
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getArticles() {
        $article = $this->a_rep->get('*');

        return $article;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
