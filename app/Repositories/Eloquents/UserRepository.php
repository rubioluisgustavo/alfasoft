<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
  public function store(array $data)
  {
    return User::create($data);
  }
}