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
	public function emOrdem() {
		$quantidade = $this->tamanho($this->lista);

		if ($quantidade == 1) {
			return true;
		} else if ($quantidade > 1) {
			for ($i = 0; $i < $quantidade-1; $i++) {
				if ($this->lista[$i] > $this->lista[$i+1]) {
					return false;
				}
			}
			return true;
		} else {
			return false;
		}
	}
	public function isSubgrupoValido() {}
	public function formarSubgrupos() {}
}

?>
