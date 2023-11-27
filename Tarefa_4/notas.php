<?php

    include_once("include/logica/logicaNotas.php");
    include_once("include/logica/conecta.php");
    include_once("include/logica/funcoesNotas.php");

?>

<head>
    <link rel="stylesheet" href="include/css/style.css">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1> Listagem das Notas Fiscais</h1>
    <main>
        <?php
            
            $notas = listarNotas($conecta);
            if($notas){
                foreach($notas as $nota){
                ?>
                  <form action="include/logica/logicaNotas.php" method="post">
                <section>
                    <p>------------------------------------------------------</p>
                    <h2>Nota Fiscal: <?php echo $nota["id_invouces"]?></h2>
                    <button class="edita" type="submit" name="Busca" value="<?php echo $nota["id_invouces"]?>"> Editar </button>
                    <button class="deletanota" type="submit" name="DeletaNota" value="<?php echo $nota["id_invouces"]?>" onclick="return confirma_exclusao()"> Deletar Nota</button>
                    <?php
                    $dados = listaDadosNotas($conecta);
                    
                    
                    foreach($dados as $dado){
                        if($dado["invouce_id"] == $nota["id_invouces"]){
                    ?> 
                            <div class="produto">
                                <input type="hidden" name="id_invouces" value="<?php echo $dado["id_invouces"]?>">
                                <input type="hidden" name="id_nota" value="<?php echo $dado["id_items"]?>">
                                <p>Produto: <?php echo $dado["name"]?> </p>
                                <p>Quantidade: <?php echo $dado["amount"]?></p>
                                <p>Valor Unitário: <?php echo $dado["unitary_value"]?></p>
                                
                                <p><input type="hidden" name="id_prod" value="<?php echo $dado["product_id"] ?>"></p>
                                <button class="deletaprod" type="submit" name="DeletaProd" value="<?php echo $dado["id_items"]?>" onclick="return confirma_exclusao()">Deletar produto</button>
                            </div>
                            <div class="info_prod">
                                <p>Valor da Nota: R$<?php echo $dado["total_value"]?> </p>
                                <p>Valor Total Produto: R$ <?php echo $dado["total_item_value"]?> </p>   
                                <p>Data de Emissão: <?php echo $dado["emission_date"]?> </p>        
                             </div>             
                           
                        </form>
                        
                    </section>
                <?php
                        }
                    }
                }
                
            }else{
                ?>
                <section>
                    <p> Nenhum nota cadastrado </p>
                </section>
            <?php
            }

        ?>
        <div class="links">
            <ul>
                <li><h3><a href="cadastraNota.php">Cadastrar notas</a></h3></li>
                <li><h3><a href="index.php">Clientes</a></h3></li>
                <li><h3><a href="produtos.php">Produtos</a></h3></li>
            </ul>
        </div>
            <script src="include/js/confirmacao.js"></script>
        
    </main>
</body>