<?php

    include_once("include/logica/logicaProduto.php");
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesProduto.php");

?>

<head>
    <link rel="stylesheet" href="include/css/style.css">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2> Listagem dos Produtos</h2>
    <main>
        <?php

            $produtos = listarProdutos($conecta);
            if($produtos){
                foreach($produtos as $produto){
                ?>

                <section>
                    <p>Produto: <?php echo $produto["name"]?></p>
                    <p>Valor do Produto: R$ <?php echo $produto["unitary_value"]?></p>

                    <form action="include/logica/logicaProduto.php" method="post">
                        <button class="edita" type="submit" name="Busca" value="<?php echo $produto["id_products"]?>"> Editar </button>
                        <button class="deletaprod" type="submit" name="Deleta" value="<?php echo $produto["id_products"]?>" onclick="return confirma_exclusao()"> Deletar </button>
                    </form>
                </section>
                <?php
                }
            }else{
                ?>
                <section>
                    <p> Nenhum produto cadastrado </p>
                </section>
            <?php
            }

        ?>
        <div class="links">
            <ul>
                <li><h3><a href="cadastraProduto.php">Cadastrar produto</a></h3></li>
                <li><h3><a href="index.php">Clientes</a></h3></li>
                <li><h3><a href="notas.php">Notas Fiscais</a></h3></li>
            </ul>
        </div>
            <script src="include/js/confirmacao.js"></script>
    </main>
</body>