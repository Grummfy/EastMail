<?php

namespace Grummfy\East\Mail\Mailer;

class Local implements MailerInterface
{
	public function send($to, $subject, $message, $additional_headers = null, $additional_parameters = null)
	{
		// not east but it will probably be the same whn you use other libs
		return mail($to, $subject,$message, $additional_headers, $additional_parameters);
	}
}
