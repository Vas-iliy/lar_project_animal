<?php


namespace App\Repositories;


use App\Article;
use App\Dog;

class ArticlesRepository extends Repository
{
    public function __construct(Article $article)
    {
        $this->model = $article;
    }
}
