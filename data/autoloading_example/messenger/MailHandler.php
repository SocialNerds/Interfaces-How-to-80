<?php

namespace Messenger;

class MailHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending ' . $message->getText() . ' to ' . $receiver->getMail() . PHP_EOL);
        return TRUE;
    }
}
