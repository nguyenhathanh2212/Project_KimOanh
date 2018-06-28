<?php
namespace App\Repositories\Contact;

interface ContactInterface {
    public function store($data);

    public function getPaginate();
}
