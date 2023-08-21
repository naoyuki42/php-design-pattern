<?php

namespace Adapter;

interface UserRepository
{
    public function findUser(int $id): UserModel;
    public function createUser(string $name, int $age): UserModel;
}