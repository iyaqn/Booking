<?php

class Authentication
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register($first_name, $last_name, $address, $email, $cont_no, $password)
    {
        return $this->user->createUser($first_name, $last_name, $address, $email, $cont_no, $password);
    }

    public function login($email, $password)
    {
        return $this->user->authenticate($email, $password);
    }

    public function adminLogin($email, $password)
    {
        return $this->user->adminAuthenticate($email, $password);
    }
}