<?php
use PHPUnit\Framework\TestCase;

class RetornaMenorEMaiorValorDeVendasSolutionTest extends TestCase
{
    public function testRetornaOMenorEMaiorValorDeVendas() {
    $this->assertSame(array(100,300), retorna_menor_e_maior_valor_de_vendas(array(array(200,100),array(300))));
    }
}

?>