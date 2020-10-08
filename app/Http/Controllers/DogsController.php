<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class DogsController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, DogRepository $d_rep, PeopleRepository $p_rep, SliderRepository $s_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);

        $this->one_page = '.breed';
        $this->template = env('THEME') . $this->one_page . '.breed';

        $this->d_rep = $d_rep;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $where = ['page', 'breed'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $dogs = $this->getDogs(false);
        $content = view(env('THEME') . $this->one_page . '.content_breed', compact('dogs'));

        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($alias)
    {
        if (Str::contains($alias, '-')) {
            $alias = Str::replaceFirst('-', ' ', $alias);
        }
        $where = ['breed', $alias];
        $dog = $this->d_rep->one($where);
        $content = view(env('THEME') . $this->one_page . '.content_oneBreed', compact('dog'))->render();

        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
