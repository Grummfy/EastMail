<?php

namespace Grummfy\East\Mail\tests\units;

use Grummfy\East\Mail\Message as TestedClass;

class Message extends \atoum\test
{
	public function testSend()
	{
		$this
			->given(
				$stringMessage = 'Hello mail',
				$mailer = new \mock\Grummfy\East\Mail\Contracts\Mailer(),
				$this->newTestedInstance($stringMessage)
			)
			->then
				->object($this->testedInstance->giveMessageToMailer($mailer))->isTestedInstance
				->mock($mailer)
				->receive('needOneMessage')
				->withArguments($stringMessage)
				->once;
	}

	public function testClass()
	{
		$this->testedClass
			->implements('Grummfy\East\Mail\Contracts\Message')
		;
	}
}
