<?php
    //require_once("../view/cabecalho.php");
    require_once("../util/conecta.php");
    include("../dao/dados-estacoes-DAO.php");

    $id = $_POST['id'];
    removeDados($conexao, $id);
    header("Location: ../view/lista-dados-estacoes.php?removido=true");
    die();
?>
