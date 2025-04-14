<!-- Defina classe chamada aluno -->

<?php
class Aluno
{
    //Criar uma propriedade privada (Encapsulament0) chmada $alunos.
    //Essa propriedade é um array que armazena os dados dos alunos.
    // Cada aluno é representado por um array associativo com o nome e idade
    private $alunos = [
        ["nome" => "João", "idade" => 18],
        ["nome" => "Maria", "idade" => 20],
        ["nome" => "Pedro", "idade" => 22],
    ];
    // Define um método publico chamado ListarAlunos.
    // Esse método serve  para "retornar" o conteudo do array $alunos.
    public function ListarAlunos()
    {
        return $this->alunos;
    }
}
?>