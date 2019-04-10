<?php

namespace Messenger;

class MessageService {
    public function send(Receiver $receiver, Message $message, IMessageHandler $messageHandler): bool {
        return $messageHandler->send($receiver, $message);
    }

}
