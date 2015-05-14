<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\Mailer as MailerInterface;

class MessageDoNotCare implements Contracts\Message
{
	private $_message;

	public function __construct($message)
	{
		$this->_message = $message;
	}

	public function mailerAskAMessage(MailerInterface $mailer)
	{
		return $this;
	}
}
