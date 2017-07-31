# TDD - TADS

**Grupo:**

* Helenita Gurgel
* Hayssa Costa
* Jonathan Batista

## Intervalos
##### Problema:  http://dojopuzzles.com/problemas/exibe/intervalos/



### Plano Teste

|  Caso  | Variavéis de Entrada | Classes Válidas                | Classes Inválidas | Saida esperado |
| ------ | -------------------- | ------------------------------ | ----------------- | -------------- |
| Caso 1 | lista : inteiros[]   | item_lista[i+1] = item_lista [i] + 1     |                   | true           |
| Caso 2 |                      | item_lista[i+1] >= item_lista[i]         |                   | true           |
| Caso 3 |                      | subgrupos ∈ lista              |                  | true           |
| Caso 4 |                      |                                | lista = vazia     | false          |

Obs.: subgrupos são conjuntos formados por item_lista.

#### CASO DE TESTE 1: 

* [101, 102, 103, 104]

#### CASO DE TESTE 2: 

* [10, 15, 20, 21, 22]

#### CASO DE TESTE 3: 

* Lista: [12, 13, 14, 20, 21, 30]
* Subgrupos: [[12, 13, 14], [20, 21], [30]]

#### CASO DE TESTE 4:

* [] => vazio

## Instalando pacotes

**Requisitos:**

* Composer

```
composer install
```

## Executando testes

```
vendor/bin/phpunit  --bootstrap src/Conjunto.php test/ConjuntoTest.php --colors
```

