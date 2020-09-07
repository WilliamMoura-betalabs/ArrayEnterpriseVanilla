<?php

class User
{
    private $user;
    private $password;
    private $name;
    private $email;

    public function __construct(string $user, string $password, string $name, string $email)
    {
        $this->user = $name;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }

}