<?php

use PHPUnit\Framework\TestCase;
use Application\Models\Aluno;

class AlunoTest extends TestCase
{
    public function testType()
    {
        $aluno = new Aluno("Jose", "B", 12, 001);
        $this->assertInternalType('int', $aluno->getMatricula());
    }

    public function testNumeroMatricula()
    {
        $aluno = new Aluno("Jose", "B", 12, 001);
        $this->assertEquals(001, $aluno->getMatricula());
    }

    public function testTurma()
    {
        $aluno = new Aluno("Maria", "C", 10, 002);
        $this->assertEquals("C", $aluno->getTurma());
    }

    public function testNota()
    {
        $aluno = new Aluno("Joao", "C", 10, 002);
        $aluno->atribuirNota(10, 7, 9);
        $this->assertEquals(26, $aluno->getNotaGeral());
    }
}
