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
    public function formarSubgrupos() {
        $quantidade = $this->tamanho($this->lista);
        $array_temp = [];
        $i = 0;
        $j = 0;
        $indice_subgrupo = 0;

        if ($quantidade == 1) {
            $subgrupos[0] = [$this->lista[0]];
            return $subgrupos;
        } else if ($quantidade > 1) {
            do {
                if ($i == $quantidade - 1) {
                    $array_temp[$j] = $this->lista[$i];
                    $subgrupos[$indice_subgrupo] = $array_temp;
                } else {
                    if ($this->lista[$i+1] == $this->lista[$i]+1) {
                        $array_temp[$j] = $this->lista[$i];
                        $j++;
                    } else {
                        // O último elemento será inserido
                        $array_temp[$j] = $this->lista[$i];
                        $subgrupos[$indice_subgrupo] = $array_temp;
                        $j = 0;
                        $array_temp = [];
                        $indice_subgrupo++;
                    }
                }
                $i++;
            } while($i < $quantidade);
            return $subgrupos;
        } else {
            return [];
        }

    }
}

?>
