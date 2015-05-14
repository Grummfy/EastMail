<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\Mailer;

class MailContact implements Contracts\MailContact
{
	private $_email;
	private $_name;

	public function __construct($email, $name = null)
	{
		$this->_email = $email;
		$this->_name = $name;
	}

	public function contactIsAskedByMailer(Mailer $mailer)
	{
		return $this;
	}

	protected function _emailAndNameAreNeededByContact(self $contact)
	{
		$contact->_emailAndNameAre($this->_email, $this->_name);
		return $this;
	}

	protected function _emailAndNameAre($email, $name)
	{
		return $this;
	}
}
