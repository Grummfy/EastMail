<?php

include_once __DIR__ . '/../vendor/autoload.php';

// init some stuff
$receiver = new \Grummfy\East\Mail\Receiver('you@your-domaine-name.tld', 'You');

$mailer = new \Grummfy\East\Mail\Mailer(new \Grummfy\East\Mail\Mailer\Dummy());

// create a message
$message = new \Grummfy\East\Mail\Message('Hello mail');
$badMessage = new \Grummfy\East\Mail\MessageDoNotCare('Hello mail');

// send the mail with dummy mailer
$mailer->send($receiver, $badMessage, 'test');
$mailer->send($receiver, $message, 'test');
