<?php

namespace Grummfy\East\Mail\Contracts;

interface Message
{
	public function giveMessageToMailer(Mailer $mailer);
}
