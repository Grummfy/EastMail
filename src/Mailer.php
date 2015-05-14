<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\Message;
use Grummfy\East\Mail\Contracts\Receiver as ReceiverContract;
use Grummfy\East\Mail\Mailer\MailerInterface;

class Mailer implements Contracts\Mailer
{
	/**
	 * @var MailerInterface
	 */
	private $_mailerMachine;

	private $_message;

	private $_receiver;

	public function __construct(MailerInterface $mailerMachine)
	{
		$this->_mailerMachine = $mailerMachine;
	}

	public function needOneMessage($message)
	{
		$this->_message = $message;
		return $this;
	}

	public function send(ReceiverContract $receiver, Message $message, $subject)
	{
		$message->mailerAskAMessage($this);
		$receiver->contactIsAskedByMailer($this);

		$to = $this->_receiver;
		$message = $this->_message;

		if (empty($to) || empty($message))
		{
			$this->_mailerMachine->send('me@myself.tld', $subject, 'no email or receiver setted');
			return $this;
		}

		$this->_mailerMachine->send($to, $subject, $message);
		return $this;
	}

	public function newContactSender($sendEmail, $senderName = null)
	{
		// TODO: Implement newContactSender() method.
		return $this;
	}

	public function newContactReceiver($sendEmail, $senderName = null)
	{
		$this->_receiver = $senderName ? ($senderName . ' <' . $sendEmail . '>') : $sendEmail;
		return $this;
	}
}
