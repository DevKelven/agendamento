<?php 
    include "../conexao/configBD.class.php";

    class Service{
        function salvar($query){
            try {
                $con = new Conexao();
                $pdo = $con->conectar();
                $stmt = $pdo->prepare($query);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Erro " . $e->getMessage();
            }
        }
        function consultar($query){
            try {
                $con = new Conexao();
                $pdo = $con->conectar();
                $stmt = $pdo->prepare($query);
                return $stmt;
            } catch (PDOException $e) {
                echo "Erro " . $e->getMessage();
            }
        }
    }
?>