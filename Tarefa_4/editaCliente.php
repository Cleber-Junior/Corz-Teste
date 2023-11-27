<head> 
    <title> Editar Dados Cliente </title>
</head>
<body>
    <main>
        <section>
        <form action="logicaCliente.php" method="post">
            <p><input type="hidden" name="id_cliente" value="<?php echo $cliente["id_cliente"]?>"></p>
            <p>Nome: <input type="text" name="nome" value="<?php echo $cliente["nome"]?>"></p>
            <p>Email: <input type="text" name="email" value="<?php echo $cliente["email"]?>"></p>
            <p><input type="submit" name="Edita" value="Edita"></p>
            </form>
        </section>
    
        <a href="../../index.php">Lista de Clientes</a>
    </main>
</body>


