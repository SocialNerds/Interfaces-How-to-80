<?php

class Message {

    /**
     * Sends message based on values.
     * 
     * @param $values
     *   Array with,
     *     - text: Message text
     *     - mail: User mail
     *     - phone: User phone number
     * 
     * @return bool
     *   TRUE if message is send correctly.
     */
    public function send(array $values): bool {
        print('Sending ' . $values['text'] . ' to ' . $values['mail'] . ' and ' . $values['phone'] . PHP_EOL);

        return TRUE;
    }

}

$myMessage = new Message();
$myMessage->send(['text' => 'Hi!', 'mail' => 'thanos@socialnerds.gr', 'phone' => '6978435168']);
