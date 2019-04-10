<?php

namespace Messenger;

class SmsHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Sending ' . $message->getText() . ' to ' . $receiver->getPhone() . PHP_EOL);
        return TRUE;
    }
}
