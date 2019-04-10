<?php

require __DIR__ . '/vendor/autoload.php';

use Messenger\Receiver;
use Messenger\MessageService;
use Messenger\MailHandler;
use Messenger\SmsHandler;
use Messenger\Message;
use Logger\LogHandler;

$receiver = new Receiver('thanos@socialnerds.gr', '6978435168');
$message = new Message('Hello!');
$messageService = new MessageService();
$messageService->send($receiver, $message, new MailHandler());
$messageService->send($receiver, $message, new SmsHandler());
$messageService->send($receiver, $message, new LogHandler());