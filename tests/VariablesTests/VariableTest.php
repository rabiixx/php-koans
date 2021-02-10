<?php

namespace Deg540\koans\Test;

use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariableTest extends TestCase
{
    /**
     * @test
     **/
    public function ejercicio1 ()
    {
        $var = new Variable();
        $this->assertIsInt( $var->declareAnInt() );
    }


}
