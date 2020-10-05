<?php


namespace App\Repositories;


use App\Dog;

class DogRepository extends Repository
{
    public function __construct(Dog $dog)
    {
        $this->model = $dog;
    }
}
