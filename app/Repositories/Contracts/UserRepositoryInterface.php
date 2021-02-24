<?php
namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function all();
    public function find($key, $column = array('id'));
}
