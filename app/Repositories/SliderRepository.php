<?php


namespace App\Repositories;


use App\Page;

class SliderRepository extends Repository
{
     public function __construct(Page $slider)
     {
         $this->model = $slider;
     }
}
