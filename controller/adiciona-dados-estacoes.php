<?php
	require_once("../util/conecta.php");
    include("../dao/dados-estacoes-DAO.php");
    require_once("../model/Dado.php");

    $dado = new Dado();


    $dado->estacao_id = $_POST["estacao_id"];
	$dado->temperatura = $_POST["temperatura"];
	$dado->velocidade_vento = $_POST["velocidadeVento"];
	$dado->umidade = $_POST["umidade"];
	$dado->data = $_POST["data"];

    if(insereDados($conexao, $dado)){
        echo "dados inseridos";
    } else{
        echo "dados nao inseridos";
    }
    mysqli_close($conexao);
    header("Location: ../view/formulario-dados-estacoes.php?adicionado=true");
    die();
?>
