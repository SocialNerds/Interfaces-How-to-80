<?php

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

class MessageService {
    public function send(Receiver $receiver, Message $message, string $type = 'mail'): bool {
        if ($type == 'mail') {
            print('Sending ' . $message->getText() . ' to ' . $receiver->getMail() . PHP_EOL);
            return TRUE;
        }
        if ($type == 'sms') {
            print('Sending ' . $message->getText() . ' to ' . $receiver->getPhone() . PHP_EOL);
            return TRUE;
        }
        

        return TRUE;
    }

}

$receiver = new Receiver('thanos@socialnerds.gr', '6978435168');
$message = new Message('Hello!');
$messageService = new MessageService();
$messageService->send($receiver, $message, 'mail');
$messageService->send($receiver, $message, 'sms');
