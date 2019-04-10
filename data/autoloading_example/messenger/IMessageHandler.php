<?php

namespace Messenger;

interface IMessageHandler {
    public function send(Receiver $receiver, Message $message): bool;
}