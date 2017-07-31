<?php 
include_once('../src/Conjunto.php');
use PHPUnit\Framework\TestCase;

class ConjuntoTest extends TestCase
{
	// Classe inválida: Lista não pode ser vazia
	public function testListaVazia() {
		$stub = $this->createMock(Conjunto::class);

        $stub->method('tamanho')->will($this->returnValue(0));
        
        $this->assertEquals(0, $stub->tamanho());
	}
}


?>
