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
		$numerosPrimos		= array(2);			

		foreach ($listaCompleta as $numero) {

			if ($numero % $listaCompleta[0] != 0 
					&& $numero != 2) {
				$numerosPrimos[] = $numero;
			}
		}

		return $numerosPrimos;
	}

}
