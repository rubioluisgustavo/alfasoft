<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
  public function getAll() 
  {
    return Contact::orderByDesc('created_at')->get();
  }

  public function store(array $data) 
  {
    return Contact::create($data);
  }

  public function update(Contact $contact, array $data)
  {
    return $contact->update($data);
  }  
}