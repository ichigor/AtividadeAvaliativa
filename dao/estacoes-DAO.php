<?php

function listaEstacoes($conexao){
    $estacoes = array();
    $query = "select * from estacoes";
    $resultado = mysqli_query($conexao, $query);
    while($estacao = mysqli_fetch_assoc($resultado)){
        array_push($estacoes, $estacao);
    }
    return $estacoes;
}

?>