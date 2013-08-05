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
		$novaLista		= array();

		if ($this->limit == 2) {
			return array(2);
		} elseif ($this->limit == 3) {
			return array(2,3);
		}

		$novaLista[] = 2;

		foreach ($listaCompleta as $numero) {

			if ($numero % $listaCompleta[0] != 0 
					&& $numero != 2) {
				$novaLista[] = $numero;
			}
		}

		return $novaLista;
	}

}
