<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Repositories\ContactsRepository;
use App\Repositories\DogRepository;
use App\Repositories\MenuRepository;
use App\Repositories\PeopleRepository;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ContactController extends SiteController
{
    public function __construct(MenuRepository $m_rep, ContactsRepository $c_rep, PeopleRepository $p_rep, SliderRepository $s_rep, DogRepository $d_rep)
    {
        parent::__construct($m_rep, $c_rep, $p_rep, $s_rep, $d_rep);

        $this->one_page = '.contact';
        $this->template = env('THEME') . $this->one_page .'.contact';
    }

    public function index () {
        $where = ['page', 'contact'];
        $slider_content = $this->getSlider($where);
        $slider = view(env('THEME') . '.slider', compact('slider_content'))->render();
        $this->vars = Arr::add($this->vars, 'slider', $slider);

        $contact = $this->getContacts();
        $people = $this->getPeople();
        $text = $this->getText($where);
        $text = $text->text;
        $content = view(env('THEME') . $this->one_page . '.content_contact', compact(['contact', 'people', 'text']))->render();
        $this->vars = Arr::add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function mail(ContactRequest $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $data = Arr::add($data, 'to', 'Vkolyasev1999@mail.ru');

            Mail::send(new ContactMail($data));

            return redirect()->route('contact')->with('status', 'Email is send');
        }
    }
}
