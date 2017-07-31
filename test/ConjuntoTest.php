<?php 
include_once('../src/Conjunto.php');
use PHPUnit\Framework\TestCase;

class ConjuntoTest extends TestCase
{
	// Classe inválida: Lista não pode ser vazia
	public function testListaVazia() {
		$stub = new Conjunto([]);

        $this->assertEquals(0, $stub->tamanho());
	}

	// Classe válida: Lista está ordenada
	public function testListaEstaOrdenada() {
		$stub = new Conjunto([10, 15, 20, 21, 22]);

		$this->assertEquals(true, $stub->emOrdem());
	}

	// Classe válida: Se é subgrupo válido
	public function testSubgrupoValido() {
		$stub = new Conjunto([101, 102, 103, 104]);		
		
		$this->assertEquals(true, $stub->isSubgrupoValido());
	}

	// Classe válida: se os subgrupos são formados corretamente
	public function testSubgruposEstaContidoNaLista() {
		$stub = new Conjunto([12, 13, 14, 20, 21, 30]);

		$this->assertEquals(true, $stub->formarSubgrupos());
	}

}


?>
