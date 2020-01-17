<?php
namespace App\Services;

class TestService
{
    public function invalidArgument()
    {
        throw new \InvalidArgumentException('Invalid Parameters');
    }
}