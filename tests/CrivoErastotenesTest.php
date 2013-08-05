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

	public function testDeveRemoverMultiplosDoPrimeiroNumeroPrimo()
	{
		$crivo = new CrivoErastotenes(5);
		$this->assertEquals(array(2, 3, 5), $crivo->numerosPrimos());	
	}

	public function testDeveRemoverMultiplosDeTodosOsNumeros()
	{
		$crivo = new CrivoErastotenes(20);
		$this->assertEquals(array(2, 3, 5, 7, 11, 13, 17, 19), $crivo->numerosPrimos());	
	}

	public function testDeveRetornarOsNumerosPrimosComLimiteIgualTrinta()
	{
		$crivo = new CrivoErastotenes(30);
		$this->assertEquals(array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29), $crivo->numerosPrimos());	
	}
}
