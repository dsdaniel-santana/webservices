<?php
include_once("services/conexao.php");
include_once("controller/controllerStatus.php");
include_once("model/modelStatus.php");

$data = json_decode(file_get_contents("php://input"), true);

$nome_status = $data["nome_status"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->atualizarStatus($nome_status);
if($resultado) echo"deu bom";


?>