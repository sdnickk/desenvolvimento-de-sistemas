<!-- Escreva uma função que recebe, por parâmetro, o número de linhas, colunas e um 
conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela HTML com 
essas características.  -->

<html>
    <head></head>

    <body>
        <form action="" method="post">
        <label for="numLinhas">insira o número de linhas:</label>
        <input type="number" name="numLinhas" id="numLinhas">
        <label for="numCol">insira o número de colunas:</label>
        <input type="number" name="numCol" id="numCol">
        <label for="text">insira o conteúdo da tabela</label>
        <input type="text" name="text" id="text">
        <input type="submit" value="enviar">
        </form>

        <?php 
        function criarTabela() {
            $linhas = $_POST['numLinhas'];
            $colunas = $_POST ['numCol'];
            $conteudo = $_POST ['text'];

            echo '<table border="1" cellpadding="4" cellspacing="0">';

            for ($i = 0; $i < $linhas; $i++){
                echo '<tr>';
             for ($j = 0; $j < $colunas; $j++){
                echo '<td>' . $conteudo . '</td>';
            }
            echo '</tr>';
        } echo '</table';

        } criarTabela();
        ?>
    </body>
</html>