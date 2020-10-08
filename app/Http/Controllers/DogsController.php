<?php

namespace App\Http\Controllers;

use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DogsController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, DogRepository $d_rep)
    {
        parent::__construct($m_rep, $c_rep);

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
        $dogs = $this->getDogs();
        $content = view(env('THEME') . $this->one_page . '.content_breed', compact('dogs'));

        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getDogs() {
        $dogs = $this->d_rep->get('*');

        return $dogs;
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
