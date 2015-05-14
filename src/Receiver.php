<?php

namespace Grummfy\East\Mail;

use Grummfy\East\Mail\Contracts\Mailer;

class Receiver extends MailContact implements Contracts\Receiver
{
	private $_tmpMailer;

	public function contactIsAskedByMailer(Mailer $mailer)
	{
		$this->_tmpMailer = $mailer;
		$this->_emailAndNameAreNeededByContact($this);

		return $this;
	}

	protected function _emailAndNameAre($email, $name)
	{
		$this->_tmpMailer->newContactReceiver($email, $name);
		return $this;
	}
}
