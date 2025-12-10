<!-- Criar um programa que utiliza o array abaixo, que contém nomes de arquivos de
imagens, para exibir, somente, uma imagem a cada solicitação feita à página do
programa. De forma aleatória. Para isto, utilize a função rand(0, 3) para gerar
o número da posição do elemento a ser lido do array.
$imagens = array("paisagem.gif", "foto.jpg", "logo.gif",
"animacao.gif");  -->

<?php 
$imagens = array("https://i.pinimg.com/736x/8a/27/1e/8a271eb59033c204b9c1375cb7d1242c.jpg","https://i.pinimg.com/736x/66/75/8f/66758fc30c2a699d43317127e0dcce66.jpg", "https://i.pinimg.com/originals/98/9e/e5/989ee5ac63a4ed703f3c849fe4d6ebff.gif", "https://i.pinimg.com/originals/a3/32/65/a3326564102d300e8025eb37d50a9389.gif");

$num = rand(0,3);
$arquivo = $imagens[$num];
 ?>

<html>
<head>
    <meta charset="utf-8">
    <title>Imagem aleatória</title>
</head>
<body>
    <img src="<?php echo $arquivo; ?>" alt="Imagem aleatória">
</body>
</html>