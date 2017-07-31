<?php

class Conjunto
{
	private $lista = [];
	private $subgrupos = [];

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
	public function isSubgrupoValido() {
		// Obs.: a gente colocou como lista apenas para exemplificação e fazer o código,
		// na prática, para usar essa função, ela deve ser usada após a formação dos subgrupos,
		// informando um array dentro da lista de arrays informado.
		$quantidade = $this->tamanho($this->lista);

		if ($quantidade == 1) {
			return true;
		} else if ($quantidade > 1) {
			for ($i = 0; $i < $quantidade-1; $i++) {
				if ($this->lista[$i+1] != $this->lista[$i]+1) {
					return false;
				}
			}
			return true;
		} else {
			return false;
		}		
	}
	public function formarSubgrupos() {}
}

?>
