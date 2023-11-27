<?php

    include_once("conecta.php");
    include_once("funcoesNotas.php");


    #CADASTRAR NOTA FISCAL
    if(isset($_POST["Cadastrar"])){
        $quantidade = $_POST['quantidade'];
        $valorTotal = $_POST['valorT'];
        $idCliente = $_POST['id_cliente'];
        $idProduto = $_POST['id_products'];
        $arrayNota = array($idCliente);
        $nota = cadastraNota($conecta, $arrayNota);
        $idNota = $nota;
        $arrayItems = array($idProduto, $idNota, $quantidade, $valorTotal);
        $items = cadastraItems($conecta, $arrayItems);
        if($items){
            $valorNota = valorTotal($conecta);
            if($valorNota){
                $valorTotal = valorTotalNota($conecta);
                header('location:../../notas.php');
            }
            
            
            
        }
        
        
    }

    #BUSCAR DADOS NOTA FISCAL
    if(isset($_POST['Busca'])){
        $id_nota = $_POST['Busca'];
        $array = array($id_nota);
        $nota = buscaDadosNota($conecta, $array);
        require_once('../../editaNota.php');
    }

    #INSERIR PRODUTO EM UMA NOTA FISCAL
    if(isset($_POST['Inserir'])){
        $idNota = $_POST["id_invouces"];
        $idProd = $_POST["id_products"];
        $quantidade = $_POST["quantidade"];
        $valorTotal = $_POST["valorT"];
        $array = array($idProd, $idNota, $quantidade, $valorTotal);
        $arrayValor = array($valorTotal, $idNota);
        $produto = cadastraItems($conecta, $array);
        if($produto){
            $valorTotal = valorTotal($conecta);
            if($valorTotal){
                $valorNota = valorTotalNota($conecta);
                header('location:../../notas.php');
            }
        }
        header('location:../../notas.php');
    }

    #DELETA NOTA FISCAL
    if(isset($_POST['DeletaNota'])){
        $idNota = $_POST['DeletaNota'];
        $arrayNota = array($idNota);
        deletaNota($conecta, $arrayNota);
        header('location:../../notas.php');
    }

    #DELETA PRODUTO DE UMA NOTA FISCAL
    if(isset($_POST['DeletaProd'])){
        $idNota = $_POST['DeletaProd'];
        $array = array($idNota);
        $produto = deletaProdNota($conecta, $array);
        if($produto){
            $valorNota = valorTotalNota($conecta);
            header('location:../../notas.php');
        }
        header('location:../../notas.php');
    }
?>