<?php
   
    
       $conexao = new mysqli('localhost', 'root','','funcional');

        $foto = isset($_POST['fotoagente']) ? $_POST['fotoagente']: "";
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
        $matricula = isset($_POST['matricula']) ? $_POST['matricula'] : "";
        $dtnascimento = isset($_POST['dtNascimento']) ? $_POST['dtNascimento'] : "";
        $mae = isset($_POST['mae']) ? $_POST['mae'] : "";
        $pai = isset($_POST['pai']) ? $_POST['pai'] : "";
        $naturalidade = isset($_POST['naturalidade']) ? $_POST['naturalidade'] : "";
        $dtvalidade = isset($_POST['dtvalidade']) ? $_POST['dtvalidade'] : "";
        $dtexpedida = isset($_POST['dtexpedida']) ? $_POST['dtexpedida'] : "";
        $tpoSang = isset($_POST['tpoSang']) ? $_POST['tpoSang'] : "";

  
   
   $sql = "INSERT INTO tb_agentes (foto, nome, matricula, dtNascimento, mae,
   pai, naturalidade, dtValidade, dtExpedicao, tpoSang) VALUES ('$foto', '$nome', '$matricula', 
   '$dtnascimento', '$mae', '$pai', '$naturalidade', '$dtvalidade', '$dtexpedida', '$tpoSang')";

   $resultado = $conexao->query($sql) or trigger_error($conexao-> error);

   if($resultado==true){

        echo "Dados inseridos com sucesso";

   } else{

        echo "error";

   }

   $conexao->close();
?>