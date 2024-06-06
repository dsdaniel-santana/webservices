<?php

class modelProdutos {

    public function listarProdutos() {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM tbl_produtos");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function cadastrarProduto($nome, $preco, $id_categoria, $descricao, $imagem) {
        try{
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO tbl_produtos 
                                        (nome_produto, id_categoria, preco, id_status, descricao, imagem, data_cadastro)
                                      VALUES (:nome, :id_categoria, :preco, :id_status, :descricao, :imagem, :data_cadastro)");
            $inserir->bindParam(':nome', $nome);
            $inserir->bindParam(':id_categoria', $id_categoria);
            $inserir->bindParam(':preco', $preco);
            $inserir->bindParam(':id_status', 1);
            $inserir->bindParam(':descricao', $descricao);
            $inserir->bindParam(':imagem', $imagem);
            $inserir->bindParam(':data_cadastro', 'GETDATE()');
            $inserir->execute();

            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
}