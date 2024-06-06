<?php

class controllerProdutos {

    public function listarProdutos() {
        try {
            $modelProdutos = new modelProdutos();
            return $modelProdutos->listarProdutos();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem) {
        try {
            $modelProdutos = new modelProdutos();
            return $modelProdutos->cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem);
        } catch(PDOException $e) {
            return false;
        }
    }

}