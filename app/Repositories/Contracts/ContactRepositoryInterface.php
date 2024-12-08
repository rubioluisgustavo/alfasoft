<?php

namespace App\Repositories\Contracts;
use App\Models\Contact;

interface ContactRepositoryInterface
{
  public function getAll();
  public function store(array $data);
  public function update(Contact $contact, array $data);
}