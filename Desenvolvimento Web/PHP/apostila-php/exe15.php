<!-- Escreva uma função que transforme horas, minutos e segundos em segundos. Ex.: 
2h40min10seg = 9610 segundos.   -->
<html>

<head></head>

<body>
    <h1>Transformação de horas, minutos e segundos, em segundos</h1>
    <form action="" method="post">
        <label for="hr">Digite as horas:</label>
        <input type="number" name="hr" id="hr">
        <label for="min">Digite os minutos:</label>
        <input type="number" name="min" id="min">
        <label for="seg">Digite os segundos:</label>
        <input type="number" name="seg" id="seg"><br>
        <input type="submit" value="enviar">
    </form>

    <?php 
        function conversor(){
            $horas = $_POST['hr'];
            $minutos = $_POST['min'];
            $segundos = $_POST['seg'];
            $convertido = ($horas * 3600) + ($minutos * 60) + $segundos;

            echo 'o valor convertido em segundos é <b>' . $convertido . ' </b>segundos'; 
        } conversor();
    ?>
</body>

</html>