<?php
    require("config.php");
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $naturalidade = $_POST['naturalidade'];
    $dt_validade = $_POST['validade'];
    $dt_expedida = $_POST['expedida'];
    $tpoSanguineo = $_POST['tpoSang'];

    if ($foto != "none")
    {
        $fp = fopen($foto, "rb");
        $conteudo = fread($fp, $foto);
        $conteudo = addslashes($conteudo);
        fclose($fp);

        $queryInsercao = "INSERT INTO tb_agentes (foto, nome, matricula, mae, pai, naturalidade,
        dt_validade, dt_expedida, tpoSanguineo) VALUES ($foto, $nome,$matricula,
        $mae, $pai, $naturalidade, $dt_validade, $dt_expedida, $tpoSanguineo)";

        mysqli_query($queryInsercao) or die ("Algo deu errado ao inserir o registro. 
        Tente novamente");
        echo 'Registro inserido com sucesso'
        header('Location: cadastro.php');

            if(mysql_affected_rows($conexao) >0)
            {
                print "A imagem foi salva na base de dados.";
                
            }
            else{
                print "Não foi possível salvar a imagem no banco de dados";
            }
    }
    else{
        print "Não foi possível carregar a imagem";
    }


?>