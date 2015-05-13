<?php

namespace Grummfy\East\Mail\Mailer;

interface MailerInterface
{
	public function send($to, $subject, $message, $additional_headers = null, $additional_parameters = null);
}
