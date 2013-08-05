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
		$numerosPrimos	= array(2);			

		$numerosPrimos = $this->removeNumerosMultiplos($listaCompleta, 2);

		return $numerosPrimos;
	}

	private function removeNumerosMultiplos($lista, $numero)
	{
		return array_values(array_filter($lista, function ($item) use($numero) {
			return !($item % $numero == 0 && $item != 2);
		}));
	}
}
