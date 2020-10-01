<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SiteController extends Controller
{
    protected $m_rep;
    protected $s_rep;
    protected $a_rep;
    protected $d_rep;
    protected $p_rep;
    protected $c_rep;

    protected $template;
    protected $vars = [];


    public function __construct(MenuRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();
        $navigation = view();
        $this->vars = Arr::add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars);
    }

    protected function getMenu() {

    }
}
