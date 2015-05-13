<?php

namespace Grummfy\East\Mail\tests\units\Mailer;

use Grummfy\East\Mail\Mailer\Dummy as TestedClass;

class Dummy extends \atoum\test
{
	public function testSend()
	{
		$this
			->given(
				$tc = new TestedClass()
			)
			->then
				->boolean($tc->send('', '', ''))->isTrue();
	}
}
