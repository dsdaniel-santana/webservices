<?php

class modelUsuarios{
    
    public function listarUsuarios(){
        try {
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT * FROM tbl_usuarios");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            //throw $th;
        }
    }

    public function cadastrarUsuario($nome, $sobrenome, $email, $senha){
        try {
            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("INSERT INTO tbl_usuarios(nome_usuario, sobrenome_usuario, email_usuario, senha_usuario, data_cadastro) 
            VALUES(:nome, :sobrenome, :email, :senha, now() )");
        $cadastrar->bindParam(":nome", $nome);
        $cadastrar->bindParam(":sobrenome", $sobrenome);
        $cadastrar->bindParam(":email", $email);
        $cadastrar->bindParam(":senha", $senha);
        
        $cadastrar->execute();
        return true;
        } catch (PDOException $e) {
            return false;
            
        }
    }

    public function atualizarUsuario($nome, $sobrenome, $email, $senha, $id_status, $id_usuario){
        try {
            $pdo = Database::conexao();
            $atualizar=$pdo->prepare("UPDATE tbl_usuarios SET nome_usuario = :nome, sobrenome_usuario = :sobrenome, email_usuario = :email, senha_usuario = :senha, id_status = :id_status, data_atualizacao = now()
            WHERE id_usuario = :id_usuario");
        $atualizar->bindParam(":nome", $nome);
        $atualizar->bindParam(":sobrenome", $sobrenome);
        $atualizar->bindParam(":email", $email);
        $atualizar->bindParam(":senha", $senha);
        $atualizar->bindParam(":id_status", $id_status);
        $atualizar->bindParam(":id_usuario", $id_usuario);

        $atualizar->execute();
        return true;
        } catch (PDOException $e) {
            return false;
            
        }
    }
    
}

?>