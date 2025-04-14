<?php
    // Declara uma função chamada exibirAlunos que recebe o parâmetro $alunos.
    // Esse parâmetro é esperado como um array com informações dos alunos.

    function exibirAlunos($alunos) {
        // Imprime na tela um título h2 e abre uma lista ordenada ul.
        echo "<h2>Lista de Alunos:</h2> <ul>";

        // Inicia um loop foreach, que percorre cada item do array $alunos.
        // Cada item é armazenado temporariamente na variável $aluno.
        foreach ($alunos as $aluno) {
            // Imprime na tela um item li com a informação do aluno.
            // Exibe o nome do aluno e sua idade, formatados como "Nome - Idade anos".
            echo "<li>{$aluno['nome']} - {$aluno['idade']} anos</li>";
        }

        // Fecha a lista
        echo '</ul>';
    }
?>
