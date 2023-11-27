<?php
    include_once("conecta.php");

    function listaCliente($conecta){
        try{
            $query = $conecta->prepare("select * from clients");
            $query->execute();
            $cliente = $query->fetchAll();
            return $cliente;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastraCliente($conecta, $array){
        try{
            $query = $conecta->prepare("insert into clients (nome, email) values (? , ?)");
            $resposta = $query->execute($array);
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    function buscaDados($conecta, $array){
        try{
            $query = $conecta->prepare("select * from clients where id_cliente= ?");
            if($query->execute($array)){
               $resposta = $query->fetch();
               return $resposta; 
            }else{
                return false;
            }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function editarCliente($conecta, $array){
        try{
            $query = $conecta->prepare("update clients set nome= ?, email= ? where id_cliente= ?");
            $resposta = $query->execute($array);
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function buscaNotaCliente($conecta, $array){
        try{
            $query = $conecta->prepare("select * from invouces join items on (invouces.id_invouces=items.invouce_id) join products on (items.product_id=products.id_products) where client_id= ?");
            $query->execute($array);
            $resposta = $query->fetchAll();
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: '. $e->getMessage();
        }
    }
   
?>