<?php

namespace Adapter;

// アダプターになるクラス
class UserRepositoryImpl implements UserRepository
{
    public function findUser(int $id): UserModel
    {
        return UserModel::find($id);
    }

    public function createUser(string $name, int $age): UserModel
    {
        return UserModel::create($name, $age);
    }
}