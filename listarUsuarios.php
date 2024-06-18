<?php

include_once("services/conexao.php");
include_once("controller/controllerUsuarios.php");
include_once("model/modelUsuarios.php");

$controllerUsuarios  = new controllerUsuarios();
$resultado = $controllerUsuarios->listarUsuarios();

if($resultado){
    $msg = array("usuarios" => $resultado);
    echo json_encode($msg);
} else{
    $msg = array("usuarios" => []);
    echo json_encode($msg);
}

?>