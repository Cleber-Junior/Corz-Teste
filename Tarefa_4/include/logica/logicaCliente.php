<?php

    include_once("conecta.php");
    include_once("funcoesCliente.php");

    #CADASTRO DE CLIENTE
    if(isset($_POST['Cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $array = array($nome, $email);
        $retorno = cadastraCliente($conecta, $array);
        header('location:../../index.php');
    }

    #BUSCAR DADOS CLIENTE
    if(isset($_POST['Busca'])){
        $id_cliente = $_POST['Busca'];
        $array = array($id_cliente);
        $cliente = buscaDados($conecta, $array);
        require_once('../../editaCliente.php');
    }

    #EDITAR CLIENTE
    if(isset($_POST['Edita'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $id_cliente = $_POST['id_cliente'];
        $array = array($nome, $email, $id_cliente);
        $retorno = editarCliente($conecta, $array);
        header('location: ../../index.php');
    }

    #NOTA FISCAL A PARTIR DO CLIENTE
    if(isset($_POST['insereNota'])){
        $id_clientes = $_POST['insereNota'];
        $array = array($id_clientes);
        $clientes = buscaDados($conecta, $array);
        
        require_once('../../clienteNota.php');
        
    }

    #NOTAS CLIENTES LISTAGEM
    if(isset($_POST['clienteNota'])){
        $id_cliente = $_POST['clienteNota'];
        $array = array($id_cliente);
        $notaCliente = buscaNotaCliente($conecta, $array);
        require_once('../../notasCliente.php');
    }
?>