<?php

    include_once("conecta.php");
    include_once("funcoesProduto.php");

    #CADASTRAR PRODUTO
    if(isset($_POST['Cadastrar'])){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $array = array($nome, $valor);
        cadastraProduto($conecta, $array);
        header('location:../../produtos.php');
    }

    #BUSCA DADOS PRODUTOS
    if(isset($_POST['Busca'])){
        $id_produto = $_POST['Busca'];
        $array = array($id_produto);
        $produto = buscaProduto($conecta, $array);
        require_once('../../editaProduto.php');
    }

    #EDITA PRODUTO
    if(isset($_POST['Edita'])){
        $nome = $_POST['produto'];
        $valor = $_POST['valor'];
        $id_produto = $_POST['id_produto'];
        $array = array($nome, $valor, $id_produto);
        editaProduto($conecta, $array);
        header('location:../../produtos.php');
    }

    #DELETAR
    if(isset($_POST['Deleta'])){
        $id_produto = $_POST['Deleta'];
        $array = array($id_produto);
        deletarProduto($conecta, $array);
        header('location:../../produtos.php');
    }
?>