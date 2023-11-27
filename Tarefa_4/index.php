<?php

    include_once("include/logica/logicaCliente.php");
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesCliente.php");

?>

<head>
    <link rel="stylesheet" href="include/css/style.css">
    <title>Lista de Clientes</title>
</head>
<body>
    <h2> Listagem dos Clientes</h2>
    <main>
        <?php

            $clientes = listaCliente($conecta);
            if($clientes){
                foreach($clientes as $cliente){
                ?>

                <section>
                    <p>Nome: <?php echo $cliente["nome"]?></p>
                    <p>Email: <?php echo $cliente["email"]?></p>

                    <form action="include/logica/logicaCliente.php" method="post">
                        <button class="edita"type="submit" name="Busca" value="<?php echo $cliente["id_cliente"]?>"> Editar </button>
                        <button class="insere" type="submit" name="insereNota" value="<?php echo $cliente["id_cliente"]?>"> Inserir Nota</button>
                        <button class="notascliente"type="submit" name="clienteNota" value="<?php echo $cliente["id_cliente"]?>"> Notas do Cliente</button>
                    </form>
                </section>
                <?php
                }
            }else{
                ?>
                <section>
                    <p> Nenhum cliente cadastrado </p>
                </section>
            <?php
            }

        ?>
        <div class="links">
            <ul>
                <li><h3><a href="cadastroCliente.php">Cadastrar Cliente</a></h3></li>
                <li><h3><a href="produtos.php">Produtos</a></h3></li>
                <li><h3><a href="notas.php">Notas Fiscais</a></h3></li>
            </ul>
        </div>
    </main>
</body>

