<head> 
    <title> Editar Dados Produto </title>
</head>
<body>
    <main>
        <section>
        <form action="logicaProduto.php" method="post">
            <p><input type="hidden" name="id_produto" value="<?php echo $produto["id_products"]?>"></p>
            <p>Nome: <input type="text" name="produto" value="<?php echo $produto["name"]?>"></p>
            <p>Valor: <input type="text" name="valor" value="<?php echo $produto["unitary_value"]?>"></p>
            <p><input type="submit" name="Edita" value="Editar"></p>
        </form>
        </section>

        <a href="../../produtos.php">Voltar para listagem</a>
    </main>
</body>
