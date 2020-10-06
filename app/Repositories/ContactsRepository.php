<?php


namespace App\Repositories;


use App\Article;
use App\Contact;
use App\Dog;

class ContactsRepository extends Repository
{
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }
}
