<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\MailContact;
use Grummfy\East\Mail\Contracts\Mailer;

class Receiver implements Contracts\Receiver
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
		$mailer->newContactReceiver($this->_contact);

		return $this;
	}
}
