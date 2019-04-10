<?php

class MessageService {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending ' . $message->getText() . ' to ' . $receiver->getMail() . ' and ' . $receiver->getPhone() . PHP_EOL);

        return TRUE;
    }

}

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

class Message {
    
    protected $text;

    function __construct(string $text) {
        $this->text = $text;
    }

    function getText() {
        return $this->text;
    }

}

$receiver = new Receiver('thanos@socialnerds.gr', '6978435168');
$message = new Message('Hello!');
$messageService = new MessageService();
$messageService->send($receiver, $message);
