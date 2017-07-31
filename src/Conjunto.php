<?php

class Conjunto
{
	private $lista = [];

	function __construct($lista)
	{
		$this->lista = $lista;
	}
	public function lista() {
		return $this->lista;
	}
	public function tamanho() {
		return count($this->lista);
	}
	public function emOrdem() {}
	public function isSubgrupoValido() {}
	public function formarSubgrupos() {}
}

?>
