<?php

namespace Adapter;

use PHPUnit\Framework\TestCase;

// テストコード
class UserRepositoryTest extends TestCase
{
    public function test_find_user(): void
    {
        $repository = new UserRepositoryImpl();
        $user = $repository->findUser(1);
        $this->assertSame(1, $user->id);
        $this->assertSame("太郎", $user->name);
        $this->assertSame(19, $user->age);
    }

    public function test_create_user(): void
    {
        $repository = new UserRepositoryImpl();
        $user = $repository->createUser("花子", 21);
        $this->assertSame(1, $user->id);
        $this->assertSame("花子", $user->name);
        $this->assertSame(21, $user->age);
    }
}