<?php

include_once("services/conexao.php");
include_once("controller/controllerProdutos.php");
include_once("model/modelProdutos.php");

$controllerProdutos = new controllerProdutos();
$resultado = $controllerProdutos->cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem);

