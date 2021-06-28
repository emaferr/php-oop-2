<?php
class Vip extends User {
    function __construct(string $userName, string $password, string $email, string $vipCode) 
    {
        parent::__construct($userName, $password, $email);
        $this->vipCode = $vipCode;
    }

    // public function getVipCode(){
    //     return $this->vipCode;
    // }

}