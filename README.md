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
| Caso 1 | lista : inteiros[]   | lista[i+1] = lista [i] + 1     |                   | true           |
| Caso 2 |                      | lista[i+1] >= lista[i]         |                   | true           |
| Caso 3 |                      | subgrupos ∈ lista              |                  | true           |
| Caso 4 |                      |                                | lista = vazia     | false          |

## Instalando pacotes

**Requisitos:**

* Composer

```
composer install
```

## Executando testes

```
vendor/bin/phpunit  --bootstrap src/Conjunto.php test/ConjuntoTest.php            
```

