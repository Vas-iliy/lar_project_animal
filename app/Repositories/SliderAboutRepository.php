<?php


namespace App\Repositories;


use App\AboutSlider;

class SliderAboutRepository extends Repository
{
    public function __construct(AboutSlider $slider)
    {
        $this->model = $slider;
    }
}
