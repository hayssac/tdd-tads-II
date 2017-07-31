<?php

class Conjunto
{
	private $lista;

	function __construct($lista)
	{
		$this->lista = $lista;
	}
	public function lista() {
		return $this->lista;
	}
	public function tamanho() {}
	public function emOrdem() {}
}

?>
