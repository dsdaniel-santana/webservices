<?php
include_once("services/conexao.php");
include_once("controller/controllerCategoria.php");
include_once("model/modelCategoria.php");

$controllerCategorias = new controllerCategoria();
$resultado = $controllerCategorias->listarCategorias();

$retorno = array("produtos" => $resultado);
echo json_encode($retorno);
?>