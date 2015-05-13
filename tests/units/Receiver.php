<?php

namespace Grummfy\East\Mail\tests\units;

use Grummfy\East\Mail\Receiver as TestedClass;

class Receiver extends \atoum\test
{
	public function testSend()
	{
		$this
			->given(
				$contact = new \mock\Grummfy\East\Mail\Contracts\MailContact(),
				$mailer = new \mock\Grummfy\East\Mail\Contracts\Mailer(),
				$this->newTestedInstance($contact)
			)
			->then
				->object($this->testedInstance->contactIsAskedByMailer($mailer))->isTestedInstance
				->mock($mailer)
				->receive('newContactReceiver')
				->withArguments($contact)
				->once;
	}

	public function testClass()
	{
		$this->testedClass
			->implements('Grummfy\East\Mail\Contracts\Receiver')
		;
	}
}
