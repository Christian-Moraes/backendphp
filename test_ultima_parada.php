<?php

use PHPUnit\Framework\TestCase;

class UltimaParadaSolutionTest extends TestCase
{
    public function testCalculaOUltimoPostoDeCombustivelNaAutonomia() {
    $this->assertSame(15, ultima_parada(2,8,array(2,15,22,11)));
    }
}

?>