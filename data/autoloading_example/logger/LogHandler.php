<?php

namespace Logger;

use Messenger\IMessageHandler;
use Messenger\Receiver;
use Messenger\Message;

class LogHandler implements IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool {
        print('Logging message ' . $message->getText() . ' to ' . $receiver->getPhone() . PHP_EOL);
        return TRUE;
    }
}
