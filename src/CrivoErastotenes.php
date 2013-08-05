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
		$listaCompleta 	= range(2, $this->limit);
		$numerosPrimos	= $listaCompleta;			

		foreach ($listaCompleta as $numero) {
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
}
