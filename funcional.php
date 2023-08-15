<?php

include_once("config.php");

$pesquisa = isset($_POST['matricula']) ? $_POST['matricula'] : "";


$sql = "SELECT * FROM tb_agentes WHERE matricula ='$pesquisa'";
$resultado = $conexao->query($sql);

while ($registro = mysqli_fetch_assoc($resultado))
{
   
    $nome = $registro['nome'];
    echo ".$nome.";
    
}
mysqli_close($conexao);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-funcional.css">
    <title>Agente Sena</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="titulo">
                <H1>ESTADO DA PARAÍBA <br>
                    PREFEITURA MUNICIPAL DE BAYEUX <br>
                    DEPARTAMENTO MUNICIPAL DE TRÂNSITO</H1>
            </div>
            <div class="divisoria"></div>
            <div class="foto">
                <img src="" alt="" id="fotoagente">
            </div>
            <div class="sub-titulo">
                <h2>IDENTIDADE FUNCIONAL</h2>
            </div>
        </header>
        <main class="conteudo">
            <fieldset class="conteudo1">
                <div class="info-inicial">
                        <div class="Nome">
                            <h4>Nome:</h4>
                            <p name="nome"><php echo $nome; ?></p>
                        </div>
                        <div class="matricula">
                            <h4>Matrícula:</h4>
                            <p id="matricula"></p>
                        </div>
                        <div class="dtaNascimento">
                            <h4>Data de Nascimento:</h4>
                            <p id="dtnascimento"></p>
                        </div>
                        <div class="filiacao">
                            <h4>Filiação:</h4>
                            <p id="mae"></p>
                            <p id="pai"></p>
                        </div>
                        <div class="naturalidade">
                            <h4>Naturalidade:</h4>
                            <p id="naturalidade"></p>
                        </div>
                        <div class="validade">
                            <h4>Validade:</h4>
                            <p id="validade"></p>
                        </div>
                        <div class="tpoSanguineo">
                            <h4>Tipo Sanguíneo:</h4>
                            <p id="tpoSang"></p>
                        </div>
                        <div class="expedida">
                            <h4>Expedida em:</h4>
                            <p id="dtexpedida"></p>
                        </div>
                        <div class="bayeux">
                            <h4>Informações:</h4>
                            <p><a href="https://bayeux.pb.gov.br/">Prefeitura Municipal de Bayeux</a></p>
                            <p><a href="https://sagresonline.tce.pb.gov.br/#/municipal/pessoal/servidores">Tribunal de Contas do Estado da Paraíba</a></p>
                        </div>
                       
                </div>
        </fieldset>
        <fieldset class="conteudo2">
            <div class="assi-diretor">
                <img src="" alt="">
                <h3>Victor Rocha Soares</h3>
                <h4>DIRETOR GERAL DO DMTRAN</h4>
            </div>
        </fieldset>
        </main>
    </div>
</body>
</html>