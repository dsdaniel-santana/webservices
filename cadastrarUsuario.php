<?php
include_once("services/conexao.php");
include_once("controller/controllerUsuarios.php");
include_once("model/modelUsuarios.php");


$data = json_decode(file_get_contents("php://input"), true);
$nome = $data["nome"];
$sobrenome = $data["sobrenome"];
$email = $data["email"];
$senha = $data["senha"];

$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->cadastrarUsuario($nome, $sobrenome, $email, $senha);

if($resultado){
    $msg= array("msg" =>"Usuario cadastrado com sucesso");
    echo json_encode($msg);
} else {
    $msg= array("msg" =>"Erro ao cadastrar usuario");
    echo json_encode($msg);
}
?>