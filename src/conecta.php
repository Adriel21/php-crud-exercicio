<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_escola_adriel";

try {
    $conexao = new PDO("mysql:host=$servidor; dbname=$banco; charset=utf8", $usuario, $senha);
    $conexao->setAttribute( PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $erro) {
    die("Erro: ". $erro->getMessage());
}


//Nome da bd: id19040617_crud_escola_adriel
//Usuario bd: id19040617_admin
//senha: zd)]2Qn^a%LTVa(h
//hospedagem: localhost