<?php

namespace Grummfy\East\Mail\Contracts;

interface Message
{
	public function mailerAskAMessage(Mailer $mailer);
}
