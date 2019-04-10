<?php

namespace Messenger;

class Receiver {
    
    protected $mail;
    protected $phone;
    function __construct(string $mail, string $phone) {
        $this->mail = $mail;
        $this->phone = $phone;
    }

    function getMail() {
        return $this->mail;
    }
    function getPhone() {
        return $this->phone;
    }

}