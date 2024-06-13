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





}


?>