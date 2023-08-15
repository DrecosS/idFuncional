<?php

$conexao = new mysqli('localhost','root','','funcional');

$pesquisa = isset($_POST['matricula']) ? $_POST['matricula'] : "";


$sql = "SELECT * FROM tb_agentes WHERE matricula ='$pesquisa'";
$resultado = $conexao->query($sql);

   while($registro = mysqli_fetch_assoc($resultado))
   {
        $nome = $registro['nome'];
        echo '<p id="nome">'.$nome.'</p>';
    }
mysqli_close($conexao);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar.php" method="POST" enctype="multipart/form-data">
        <p id="nome"></p>
    </form>
</body>
</html>