<?php

namespace Messenger;

class Message {
    
    protected $text;

    function __construct(string $text) {
        $this->text = $text;
    }

    function getText() {
        return $this->text;
    }

}
