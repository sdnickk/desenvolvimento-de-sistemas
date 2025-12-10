<!-- Escreva uma função que recebe, por parâmetro, o nome de um aluno e imprime uma tabela HTML -->
<html>

<head></head>

<body>
    <form action="" method="post">
        <label for="nome">Insira seu nome:</label>
        <input type="text" name="nome" id="nome">
    </form><br>
    <!-- <table border="1" width="30%">
        <tr align="left">
            <td colspan="2">CEDUP Industrial de Lages - PRONATEC</td>
        </tr>
        <tr>
            <td colspan="2"><b>Curso técnico:</b> Desenvolvimento de Sistemas</td>
        </tr>
        <tr>
            <td><b>Turno:</b> matutino</td>
            <td><b>Turma:</b> 2 </td>
        </tr>
        <tr>
            <td colspan="2"><b>Nome do aluno:</b> </td>
        </tr>
    </table> -->

    <?php
    $nome = $_POST['nome'];
    function nomeAluno($nome) {
        echo '<table border="1" width="30%">
        <tr align="left">
            <td colspan="2">CEDUP Industrial de Lages - PRONATEC</td>
        </tr>
        <tr>
            <td colspan="2"><b>Curso técnico:</b> Desenvolvimento de Sistemas</td>
        </tr>
        <tr>
            <td><b>Turno:</b> matutino</td>
            <td><b>Turma:</b> 2 </td>
        </tr>
        <tr>
            <td colspan="2"><b>Nome do aluno: </b>' . $nome . ' </td>
        </tr>
    </table>';
    };
    nomeAluno($nome);
    ?>
</body>

</html>