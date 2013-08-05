<?php

class CrivoErastotenes
{
	private $limit;

	public function __construct($limit)
	{
		$this->limit = $limit;
	}

	public function numerosPrimos()
	{
		$numerosPrimos				= range(2, $this->limit);
		$maiorNumeroParaVerificar 	= $this->maiorNumeroParaVerificar();

		if($maiorNumeroParaVerificar < 2) {
			return range(2, $this->limit);
		}

		foreach ( range(2, $this->maiorNumeroParaVerificar() ) as $numero ) {
			$numerosPrimos = $this->removeNumerosMultiplos($numerosPrimos, $numero);
			
		}

		return $numerosPrimos;
	}

	private function removeNumerosMultiplos($lista, $numero)
	{
		return array_values(array_filter($lista, function ($item) use($numero) {
			return !($item % $numero == 0 && $item != $numero);
		}));
	}

	private function maiorNumeroParaVerificar()
	{
		return floor(sqrt($this->limit));
	}
}
