<?php
    $conexao = mysqli_connect("localhost", "root", "Bdmtran1@","");

    if($conexao)
    {
        $baseSelecionada = mysqli_select_db("funcional");
        if(!$baseSelecionada){
            die('Não foi possível conectar a base de dados: ' . mysqli_error());
        }
    }
        else{
            die('Não conectado: ' . mysqli_error());    
        }
    

?>