<?php

namespace Grummfy\East\Mail\Mailer;

class Dummy implements MailerInterface
{
	public function send($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
	{
		// not east but the purpose is to avoid mail sending or to be blocked by local stuff in a stupid timeout.
		return true;
	}
}
