<?php
	//require_once("../view/cabecalho.php");
	require_once("../util/conecta.php");
    include("../dao/dados-estacoes-DAO.php");
    require_once("../model/Dado.php");

    $dado = new Dado();

    $dado->id = $_POST['id'];
	$dado->estacao_id = $_POST["estacao_id"];
	$dado->temperatura = $_POST["temperatura"];
	$dado->velocidade_vento = $_POST["velocidadeVento"];
	$dado->umidade = $_POST["umidade"];
	$dado->data = $_POST["data"];

    if(alteraDados($conexao, $dado)){
        echo "dados alterados";
    }
    else{
        echo "dados nao alterados";
    }
    mysqli_close($conexao);
    header("Location: ../view/lista-dados-estacoes.php?alterado=true");
    die();
?>