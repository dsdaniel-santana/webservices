<?php


class controllerCategoria{
    
    public function  listarCategorias() {
        try {
            $modelCategorias = new modelCategorias();
            return $modelCategorias->listarCategorias();

        } catch (PDOException $e){
            return false;
        }
    }

    public function cadastrarCategoria($nome_categoria, $id_status) {
        try{
            $modelCategorias = new modelCategorias();
            return $modelCategorias->cadastrarCategoria($nome_categoria, $id_status);
        } catch (PDOException $e){
            return false;
        }
    }

    public function atualizarCategoria($nome_categoria, $id_status, $id_categoria) {
        try{
            $modelCategorias = new modelCategorias();
            return $modelCategorias->atualizarCategoria($nome_categoria, $id_status, $id_categoria);
        } catch (PDOException $e){
            return false;
        }
    }




}


?>