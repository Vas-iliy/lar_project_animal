<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;

class SiteController extends Controller
{
    protected $m_rep;
    protected $s_rep;
    protected $a_rep;
    protected $d_rep;
    protected $p_rep;
    protected $c_rep;

    protected $template;
    protected $one_page;
    protected $vars = [];


    public function __construct(MenuRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();
        $navigation = view(env('THEME') . '.menu', compact('menu'))->render();
        $this->vars = Arr::add($this->vars, 'navigation', $navigation);

        return view($this->template)->with($this->vars);
    }

    protected function getMenu() {
        $menu = $this->m_rep->get('*');
        $menuLavary = \Menu::make('myMenu', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->page, $item->path)->id($item->id);
                }
                else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->page, $item->path)->id();
                    }
                }
            }
        });
        return $menuLavary;
    }
}
