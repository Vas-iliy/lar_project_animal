<?php

namespace App\Http\Controllers;

use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PeopleController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, PeopleRepository $p_rep, SliderRepository $s_rep, DogRepository $d_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);

        $this->one_page = '.people';
        $this->template = env('THEME') . $this->one_page . '.people';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $where = ['page', 'people'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $people = $this->getPeople();
        $content = view(env('THEME') . $this->one_page . '.content_people', compact('people'))->render();
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
        $where = ['name', $alias];
        $person = $this->p_rep->one($where);
        $content = view(env('THEME') . $this->one_page . '.content_person', compact('person'));
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
