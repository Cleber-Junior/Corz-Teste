<?php
    include_once("conecta.php");
    
    function listarProdutos($conecta){
        try{
            $query = $conecta->prepare("select * from products");
            $query->execute();
            $produtos = $query->fetchAll();
            return $produtos;
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function cadastraProduto($conecta, $array){
        try{
            $query = $conecta->prepare("insert into products (name, unitary_value) values(?, ?)");
            $produto = $query->execute($array);
            return $produto;
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function buscaProduto($conecta, $array){
        try{
            $query = $conecta->prepare('select * from products where id_products= ?');
            if($query->execute($array)){
                $produto = $query->fetch();
                return $produto;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function editaProduto( $conecta, $array){
        try{
            $query = $conecta->prepare('update products set name= ?, unitary_value= ? where id_products= ?');
            $reposta = $query->execute($array);
            return $reposta;
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deletarProduto($conecta, $array){
        try{
            $query = $conecta->prepare('delete from products where id_products= ?');
            $produto = $query->execute($array);
            return $produto;
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }

?>