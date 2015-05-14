<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\MailContact;

class Mailer implements Contracts\Mailer
{
	public function needOneMessage($message)
	{
		$this->_message = $message;
		return $this;
	}

	public function send()
	{
		// TODO: Implement send() method.
	}

	public function newContactSender(MailContact $senderContact)
	{
		// TODO: Implement newContactSender() method.
	}

	public function newContactReceiver(MailContact $senderContact)
	{
		// TODO: Implement newContactReceiver() method.
	}
}
