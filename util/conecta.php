<?php
//usado para resolver o problema dos caracteres especiais que vem do banco - problema caracteres especiais utf8 agora com problema
//header("Content-Type: text/html; charset=ISO-8859-1",true);

$conexao = mysqli_connect("localhost", "root", "", "atividade");

if (!$conexao->set_charset("utf8")) {
    exit();
}