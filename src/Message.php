<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\Mailer;

class Message implements Contracts\Message
{
	private $_message;

	public function __construct($message)
	{
		$this->_message = $message;
	}

	public function giveMessageToMailer(Mailer $mailer)
	{
		$mailer->needOneMessage($this->_message);

		return $this;
	}
}
