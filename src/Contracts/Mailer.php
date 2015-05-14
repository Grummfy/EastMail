<?php

namespace Grummfy\East\Mail\Contracts;

interface Mailer
{
	public function send(Message $message, $subject);

	public function needOneMessage($message);

	public function newContactSender($sendEmail, $senderName = null);

	public function newContactReceiver($sendEmail, $senderName = null);
}
