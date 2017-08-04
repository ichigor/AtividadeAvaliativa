<?php

function listaDados($conexao){
    $dados = array();
    //precisei de ajuda do youtube para dar join nas tabelas
    $resultado = mysqli_query($conexao, "select d.*, e.nome as estacao_nome from dados as d join estacoes as e on e.id= d.estacao_id");
    while($dado = mysqli_fetch_assoc($resultado)){
        array_push($dados, $dado);
    }
    return $dados;
}

function insereDados($conexao, Dado $dado){
    $query= "insert into dados (estacao_id, temperatura, velocidade_vento, umidade, data) VALUES ('{$dado->estacao_id}','{$dado->temperatura}','{$dado->velocidade_vento}','{$dado->umidade}', '{$dado->data}') ";
    return mysqli_query($conexao, $query);
}

function removeDados($conexao, $id){
    $query = "delete from dados where id= {$id}";
    return mysqli_query($conexao, $query);
}

function buscaDado($conexao, $id){
    $query= "select * from dados where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraDados($conexao, Dado $dado){
    $query= "update dados set estacao_id = '{$dado->estacao_id}', temperatura ='{$dado->temperatura}', velocidade_vento = '{$dado->velocidade_vento}', umidade = '{$dado->umidade}', data= '{$dado->data}' where id ='{$dado->id}'";
    return mysqli_query($conexao, $query);
}