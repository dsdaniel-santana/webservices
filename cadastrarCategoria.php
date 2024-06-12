<?php
include_once("services/conexao.php");
include_once("controller/controllerCategoria.php");
include_once("model/modelCategoria.php");

$data = json_decode(file_get_contents('php://input'), true);


$nome_categoria = $data ["nome_categoria"];
$id_status = $data ["id_status"];

$controllerCategoria = new controllerCategoria(); 
$resultado = $controllerCategoria->cadastrarCategoria($nome_categoria,$id_status);
?>