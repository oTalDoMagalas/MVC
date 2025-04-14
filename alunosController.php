<?php
// Incluir o arquivo 'aluno.php', que contém a classe Aluno.
// Incluir o 'alunosView.php', que contém a função exibirAlunos().
require_once 'aluno.php';
require_once 'alunosView.php';

// Declaração da classe AlunosController.
// Essa classe é responsável pela comunicação entre o aluno.php (Model) e o alunosView.php (View).
class AlunosController {
    // Criar uma propriedade privada chamada $model.
    private $model;

    // Criar o método construtor da classe, chamado automaticamente ao instanciar o objeto.
    public function __construct() {
        // Criar uma nova instância da classe Aluno e armazenar na propriedade $model.
        $this->model = new Aluno();
    }

    // Método para listar os alunos
    public function listar() {
        // Chama o método da model e armazena os dados retornados
        $alunos = $this->model->listarAlunos();

        // Chama a função da view para exibir os alunos
        exibirAlunos($alunos);
    }
}
        //execução do codigo
        // aqui fora da classe é criado um objeto do tipo AlunoController.
    $controler = new AlunosController();
        // apos criar o objeto, é chamado o metodo listar();
    $controler->listar();

?>
