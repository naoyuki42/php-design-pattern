<?php

namespace Adapter;

// 外部API
class UserModel
{
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?int $age,
    ) {}

    public static function find(int $id): UserModel
    {
        // 仮データ
        return new UserModel($id, "太郎", 19);
    }

    public static function create(string $name, int $age): UserModel
    {
        // 仮データ
        return new UserModel(1, $name, $age);
    }
}