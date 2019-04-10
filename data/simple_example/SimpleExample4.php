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

interface IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool;
}

class MessageService {
    public function send(Receiver $receiver, Message $message, IMessageHandler $messageHandler): bool {
        return $messageHandler->send($receiver, $message);
    }

}

class SmsHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending ' . $message->getText() . ' to ' . $receiver->getPhone() . PHP_EOL);
        return TRUE;
    }
}

class MailHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending ' . $message->getText() . ' to ' . $receiver->getMail() . PHP_EOL);
        return TRUE;
    }
}

class LogHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Logging message ' . $message->getText() . ' to ' . $receiver->getMail() . PHP_EOL);
        return TRUE;
    }
}

class SiteNotitficationHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending push notification message ' . $message->getText() . ' to ' . $receiver->getMail() . PHP_EOL);
        return TRUE;
    }
}

$receiver = new Receiver('thanos@socialnerds.gr', '6978435168');
$message = new Message('Hello!');
$messageService = new MessageService();
$messageService->send($receiver, $message, new MailHandler());
$messageService->send($receiver, $message, new SmsHandler());
$messageService->send($receiver, $message, new LogHandler());
$messageService->send($receiver, $message, new SiteNotitficationHandler());