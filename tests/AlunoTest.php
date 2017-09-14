<?php

use PHPUnit\Framework\TestCase;
use Application\Models\Aluno;

class AlunoTest extends TestCase
{
    public function testType()
    {
        $aluno = new Aluno("Danilo", "B", 20, 001);
        $this->assertInternalType('string', $aluno->getMatricula());
    }

    public function testNumeroMatricula()
    {
        $aluno = new Aluno("Rodrigo", "A", 21, 003);
        $this->assertEquals(003, $aluno->getMatricula());
    }

    public function testTurma()
    {
        $aluno = new Aluno("Eduardo", "C", 10, 002);
        $this->assertEquals("C", $aluno->getTurma());
    }

    public function testNota()
    {
        $aluno = new Aluno("Julio", "C", 10, 005);
        $aluno->atribuirNota(10, 7, 9);
        $this->assertEquals(26, $aluno->getNotaGeral());
    }
}
