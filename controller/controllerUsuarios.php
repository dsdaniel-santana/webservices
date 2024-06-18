<?php
class controllerUsuarios{

    public function listarUsuarios(){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->listarUsuarios();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarUsuario($nome, $sobrenome, $email, $senha){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->cadastrarUsuario($nome, $sobrenome, $email, $senha);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarUsuario($nome, $sobrenome, $email, $senha, $id_status, $id_usuario) {
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->atualizarUsuario($nome, $sobrenome, $email, $senha, $id_status, $id_usuario); 
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>