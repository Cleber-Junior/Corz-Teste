<head>
    <title> Pagina Cadastro </title>
</head>
<body>
    <main>
        <section>
            <form action="include/logica/logicaProduto.php" method="post">
                <p> Digite o nome do produto:<input type="text" name="nome"></p>
                <p> Digite o valor:<input type="text" name="valor"></p>
                <p><button type="submit" name="Cadastrar" value="Cadastrar">Cadastrar</button></p>
            </form>
        </section>

        <h3><a href="produtos.php"> Voltar a listagem de produtos </a></h3>
    </main>
</body>