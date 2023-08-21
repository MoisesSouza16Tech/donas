<?php
    include_once "model/Categoria.php";
    include_once "model/Conexao.php";

    class daoCategoria {
        
        public static function cadastrar($Categoria){
            $connection = Conexao::conectar();

            $queryInsert = "INSERT tbCategoria(idCategoria, nomeCategoria)
                            VALUES (?,?)";

            $prepareStatement = $connection->prepare($queryInsert);

            $prepareStatement->bindValue(2, $Categoria->getNomeCategoria());

            $prepareStatement->execute();
        }

        public static function deletar($Categoria){
            $connection = Conexao::conectar();

            $queryInsert = "DELETE tbCategoria WHERE idCategoria = ?";

            $prepareStatement = $connection->prepare($queryInsert);

            $prepareStatement->bindValue(1, $Categoria->getIdCategoria());

            $prepareStatement->execute();
        }

        public static function editar($Categoria){
            $connection = Conexao::conectar();

            $queryInsert = "UPDATE tbCategoria
                            SET nomeCategoria = ?
                            WHERE idCategoria = ?";

            $prepareStatement = $connection->prepare($queryInsert);

            $prepareStatement->bindValue(1, $Categoria->getNomeCategoria());
            $prepareStatement->bindValue(2, $Categoria->getIdCategoria());

            $prepareStatement->execute();
        }

         public static function editarFoto($Categoria){
            $connection = Conexao::conectar();

            $queryInsert = "UPDATE tbCategoria
                            SET fotoCategoria = ?
                            WHERE idCategoria = ?";
            
            $prepareStatement = $connection->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $Categoria->getFotoCategoria());
            $prepareStatement->bindValue(2, $Categoria->getIdCategoria());

            $prepareStatement->execute();
        }

        public static function listar(){
            $connection = Conexao::conectar();

            $querySelect = "SELECT * FROM tbCategoria";

            $resultado = $connection->prepare($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;

        }
    }
?>