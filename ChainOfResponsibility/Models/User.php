<?php

namespace Models;

class User
{
    protected int $balance = 0;

    public function __construct(protected readonly string $username)
    {
    }

    public function getBalance(): string
    {
        return $this->balance;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function addToBalance(int $balance): void
    {
        $this->balance += $balance;
    }
}
