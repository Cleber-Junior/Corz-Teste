<?php
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesProduto.php");
?>

<head>
    <title> Pagina Cadastro </title>
</head>
<body>
    <main>
        <section>
            <form action="logicaNotas.php" method="post">
           
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
                <p><input type="hidden" name="id_cliente" value="<?php echo $clientes["id_cliente"]?>"></p>
                <p><input type="hidden" name="id_products" id="produtoId" value="<?php echo $id_produto?>"></p>
                <p>Quantidade:<input type="text" name="quantidade" id="quantidade"></p>
                <p>Valor Unitario: <input type="text" name="valorU" id="valorUnitario" readonly></p>
                <p>Valor Total: <input type="text" name="valorT" id="valorTotal" readonly></p>
                <p>Valor Nota: <input type="text" name="valorN" id="valorNota" readonly></p>

                <p><input type="submit" name="Cadastrar" value="Cadastrar Nota"></p>
            </form>
        </section>

        <h3><a href="../../index.php"> Voltar a listagem dos Clientes </a></h3>
        <script src="../js/valor.js"></script>
    </main>
</body>

