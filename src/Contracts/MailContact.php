<?php

namespace Grummfy\East\Mail\Contracts;

interface MailContact
{
	public function contactIsAskedByMailer(Mailer $mailer);
}
