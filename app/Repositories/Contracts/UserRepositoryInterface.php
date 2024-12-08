<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
  public function store(array $data);
}