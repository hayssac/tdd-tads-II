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
		$stub = $this->createMock(Conjunto::class);

		$stub->method('emOrdem')->will($this->returnValue(true));

		$this->assertEquals(true, $stub->emOrdem());
	}

	// Classe válida: Se é subgrupo válido
	public function testSubgrupoValido() {
		$stub = $this->createMock(Conjunto::class);
		
		$stub->method('isSubgrupoValido')->will($this->returnValue(true));

		$this->assertEquals(true, $stub->isSubgrupoValido());
	}

	public function testSubgrupoEstaContidoNaLista() {
		$stub = $this->createMock(Conjunto::class);

		$stub->method('lista')->will($this->returnValue([12, 13, 14, 20, 21, 30]));

		$stub->method('formarSubgrupos')->will($this->returnValue([[12, 13, 14], [20, 21], [30]]));

		$this->assertEquals([[12, 13, 14], [20, 21], [30]], $stub->formarSubgrupos());

	}

}


?>
