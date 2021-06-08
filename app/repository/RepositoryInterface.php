<?php

namespace App\repository;

interface RepositoryInterface
{
    public function all();

    public function create(array  $data);
}