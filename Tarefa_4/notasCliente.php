<?php

    include_once("include/logica/logicaNotas.php");
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesNotas.php");

?>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1> Listagem das Notas Fiscais</h1>
    <main>
            <?php
                $id_cliente = $_POST['clienteNota'];
                $array = array($id_cliente);
                $notaClientes = buscaNotaCliente($conecta, $array);
                if ($notaClientes) {
                    foreach ($notaClientes as $notaCliente) {
            ?>
                <section>
                    <p>--------------------------------------------</p>
                    <h2> Nota Fiscal </h2>
                    <p></p>
                    <p>Produto: <?php echo $notaCliente['name']?></p>
                    <p>Quantidade: <?php echo $notaCliente['amount']?></p>
                    <p>Valor Unitário: <?php echo $notaCliente['unitary_value']?></p>
                    <p>Valor Total: <?php echo $notaCliente['total_item_value']?></p>
                    <p>Valor da Nota: <?php echo $notaCliente['total_value']?></p>
                    <p>Data de Emissão: <?php echo $notaCliente['emission_date']?></p>
                    
                </section>
            <?php
                    }
                }else{
                    ?>
                    <section> Este cliente não possui nenhuma nota</section>
                    <?php
                }
                
            ?>
            <div class="links">
                <ul>
                    <li><h3><a href="../../index.php">Clientes</a></h3></li>
                    <li><h3><a href="../../produtos.php">Produtos</a></h3></li>
                </ul>
            </div>
            <script src="include/js/confirmacao.js"></script>
    </main>
</body>