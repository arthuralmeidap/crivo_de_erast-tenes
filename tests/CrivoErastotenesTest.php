<?php

include __DIR__ . '/../src/CrivoErastotenes.php';

class CrivoErastotenesTest extends \PHPUnit_Framework_TestCase
{

	public function testParaUmaListaDeUmItemDeveRetornarUmaLIstaIgual()
	{
		$crivo = new CrivoErastotenes(2);

		$this->assertEquals(array(2), $crivo->numerosPrimos());
	}

}
