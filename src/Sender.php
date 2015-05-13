<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\MailContact;
use Grummfy\East\Mail\Contracts\Mailer;

class Sender implements Contracts\Sender
{
	/**
	 * @var MailContact
	 */
	protected $_contact;

	public function __construct(MailContact $contact)
	{
		$this->_contact = $contact;
	}

	public function contactIsAskedByMailer(Mailer $mailer)
	{
		$mailer->newContactSender($this->_contact);

		return $this;
	}
}
