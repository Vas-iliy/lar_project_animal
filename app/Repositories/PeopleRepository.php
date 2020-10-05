<?php


namespace App\Repositories;


use App\People;

class PeopleRepository extends Repository
{
    public function __construct(People $people)
    {
        $this->model = $people;
    }
}
