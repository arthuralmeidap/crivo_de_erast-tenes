<?php

include __DIR__ . '/../src/CrivoErastotenes.php';

class CrivoErastotenesTest extends \PHPUnit_Framework_TestCase
{

	public function testParaLimiteDoisDeveRetornarSomenteDois()
	{
		$crivo = new CrivoErastotenes(2);
		$this->assertEquals(array(2), $crivo->numerosPrimos());
	}

	public function testParaLimiteTresDeveRetornarDoisETres()
	{
		$crivo = new CrivoErastotenes(3);
		$this->assertEquals(array(2, 3), $crivo->numerosPrimos());	
	}

	public function testeDeveRemoverMultiplosDoPrimeiroNumeroPrimo()
	{
		$crivo = new CrivoErastotenes(10);
		$this->assertEquals(array(2, 3, 5, 7, 9), $crivo->numerosPrimos());	
	}

}
