<?php
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesProduto.php");
    include_once("include/logica/funcoesCliente.php");
?>

<head>
    <title> Pagina Cadastro </title>
</head>
<body>
    <main>
        <section>
            <form action="include/logica/logicaNotas.php" method="post">
                <p>Seleione o produto:</p>    
                <select id="produtos" onchange="atualizarDadosProduto()">
                    <option>Selecione o produto</option>
                    <?php
                    
                        $produtos = listarProdutos($conecta);
                        
                            foreach($produtos as $produto){
                                $id_produto = $produto["id_products"];
                                $nome = $produto["name"];
                                $valor = $produto["unitary_value"];
                                echo "<option value='$id_produto' data-valor='$valor'> $nome </option>";
                            }
                        ?>
                </select>
                        
                <p>Seleione o Cliente:</p>  
                <select id="clientes" onchange="idCliente()">
                    <option>Selecione o cliente</option>
                    <?php
                    
                        $clientes = listaCliente($conecta);
                        
                            foreach($clientes as $cliente){
                                $id_cliente = $cliente["id_cliente"];
                                $nome = $cliente["nome"];
                                echo "<option value='$id_cliente'> $nome </option>";
                            }
                        ?>
                </select>
                <p><input type="hidden" name="id_products" id="produtoId" value="<?php echo $id_produto?>"></p>
                <p><input type="hidden" name="id_cliente" id="clienteId" value="<?php echo $id_cliente?>"></p>
                <p>Quantidade:<input type="text" name="quantidade" id="quantidade"></p>
                <p>Valor Unitario: <input type="text" name="valorU" id="valorUnitario" readonly></p>
                <p>Valor Total: <input type="text" name="valorT" id="valorTotal" readonly></p>


                <p><input type="submit" name="Cadastrar" value="Cadastrar Nota"></p>
            </form>
        </section>

        <h3><a href="notas.php"> Voltar a listagem das Notas </a></h3>
        <script src="include/js/valor.js"></script>
    </main>
</body>