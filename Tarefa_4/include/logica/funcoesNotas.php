<?php

    include_once("conecta.php");

    function listarNotas($conexao){
        try{
            $query = $conexao->query("select * from invouces");
            $resultado = $query->fetchAll();
            return $resultado;
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    function listaDadosNotas($conecta){
        try{
            $query = $conecta->prepare("select * from invouces join items on (invouces.id_invouces=items.invouce_id) join products on (items.product_id=products.id_products)");
            $query->execute();
            $notas = $query->fetchAll();
            return $notas;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastraNota($conecta, $arrayNota){
        try{
            $query = $conecta->prepare("insert into invouces (client_id, emission_date) values (?, curdate())");
            $query->execute($arrayNota);
            $resposta = $conecta->lastInsertId();
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function valorTotalNota($conecta){
        try{
            $query = $conecta->prepare('update invouces set invouces.total_value = (select sum(items.total_item_value) from items where items.invouce_id = invouces.id_invouces)');
            $resposta = $query->execute();
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function valorTotal($conecta){
        try{
            $query = $conecta->prepare('update items set total_item_value = amount * (select unitary_value from products where items.product_id = products.id_products)');
            $resposta = $query->execute();
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastraItems($conecta, $arrayItems){
        try{
            $query = $conecta->prepare('insert into items (product_id, invouce_id, amount, total_item_value) values (?, ?, ?, ?)');
            $resposta = $query->execute($arrayItems);
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function buscaDadosNota($conecta, $array){
        try{
            $query = $conecta->prepare('select * from items where invouce_id= ?');
            $query->execute($array);
            $resposta = $query->fetch();
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function deletaNota($conecta, $arrayNota){
        try{
            $query = $conecta->prepare('delete from invouces where id_invouces= ?');
            $resposta = $query->execute($arrayNota);
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deletaProdNota($conecta, $array){
        try{
            $query = $conecta->prepare('delete from items where id_items= ?');
            $resposta = $query->execute($array);
            return $resposta;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

?>