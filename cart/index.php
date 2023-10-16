<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebo de Mangás</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Topo do site-->
    <div class="header">
        <p class="logo">
            Sebosa dos Mangás
        </p>
        <div class="cart">
        <i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>
    <!--Fim do topo do site-->
    <!--Conteudo do site-->
    <div class="container">
        <div class="linha-produtos">
            <!-- Inicio Produto-->
            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="./assets/img/onepiece103.png" alt="One Piece vol.103" class="produtoMiniatura">
                </div>
                <div class="titulo">
                    <p>One Piece Vol.103</p>
                    <h2>R$ 36,90</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button">Adicionar ao Carrinho</button>
                </div>
            </div>
            </form>
            <!-- Fim do Produto-->
        </div>
        <!-- -->
    </div>
    <!--Conteudo do site-->

</body>
</html>
