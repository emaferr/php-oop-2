<?php

class User 
{
    protected $userName;
    protected $password;
    protected $email;
    public function __construct(string $userName, string $password, string $email)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
        // $this->creditCard = $creditCard;
    }
}