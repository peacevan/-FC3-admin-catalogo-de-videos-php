<?php

namespace Tests\Unit;

use Core\Teste;
use PHPUnit\Framework\TestCase;

class TesteUnitTest extends TestCase
{

    public function   teste_call_method_foo()
    {
        $teste = new Teste();
        $reponse = $teste->foo();
        $this->assertEquals('1234', $reponse);
    }
}
