<?php

namespace Grummfy\East\Mail\Contracts;

interface Mailer
{
	public function send();

	public function needOneMessage($message);

	public function newContactSender(MailContact $senderContact);

	public function newContactReceiver(MailContact $senderContact);
}
