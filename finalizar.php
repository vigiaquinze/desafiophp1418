<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    echo "<script language='javascript' type='text/javascript'> 
        alert('Para finalizar uma compra você deve estar logado'); window.location.href='cadastro.html';</script>";
}

$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos StellarCart</title>
    <link rel="stylesheet" href="css/stylefinalizar.css">
</head>

<body>
    <nav>
        <div class="hero">
            <img src="img/hero-images/hero-image4.png">
        </div>
        <header>
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo-navbar.png">
                </div>
                <div class="paginasSite">
                    <a href="index.html">
                        <h4>Home</h4>
                    </a>
                    <a href="produtos.html">
                        <h4>Produtos</h4>
                    </a>
                </div>
                <div class="pesquisar">
                    <div class="barraPesquisa">
                        <div class="searchIcon">
                            <a href="#navbar">
                                <img src="img/icons/search-icon.png">
                            </a>
                        </div>
                        <div class="inputPesquisar">
                            <input type="text" name="search" id="searchInput" placeholder="Pesquisar...">
                        </div>
                        <div class="backgroundPesquisar">
                            <img src="img/components/search-navbar-background.svg">
                        </div>
                    </div>
                    <div class="icons">
                        <a href="cadastro.html">
                            <img src="img/icons/person-icon.png" alt="Cadastro">
                        </a>
                        <div>
                            <div class="shopping">
                                <img src="img/icons/carshop-icon.svg" onclick="finaliza()">
                                <span class="quantity">0</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
    </nav>
    <div class="finalizarContainer">
        <div class="addCard">
            <div class="titleCard">
                <img src="img/icons/card-icon.svg">
                <h1>Adicionar um cartão</h1>
            </div>
            <hr>
            <div class="inputsCard">
                <input type="text" name="numeroCartao" id="numeroCartao" placeholder="Número do cartão" style="background-image: url('img/icons/card-icon.svg'); background-size: 25px; background-repeat: no-repeat;  background-position: 20px 10px; padding: 12px 45px 12px 60px;">
                <br>
                <input type="username" name="username" id="username" placeholder="Nome do titular" style="background-image: url('img/icons/person-icon-black.svg'); background-size: 25px; background-repeat: no-repeat;  background-position: 20px 15px; padding: 12px 45px 12px 60px;">
                <br>
                <input type="text" name="validadeCartao" id="validadeCartao" placeholder="Validade do cartão (MM/AA)" style="background-image: url('img/icons/calendar-icon.svg'); background-size: 25px; background-repeat: no-repeat;  background-position: 20px 15px; padding: 12px 45px 12px 60px;">
                <br>
                <input type="text" name="cpf" id="cpf" placeholder="CPF/CNPJ do titular" style="background-image: url('img/icons/cpf-icon.svg'); background-size: 25px; background-repeat: no-repeat;  background-position: 20px 15px; padding: 12px 45px 12px 60px;">
                <br>
            </div>
        </div>
        <div class="totalCompra">
            <div class="titleCard">
                <img src="img/icons/carshop-icon-black-50.svg" fill-opacity="50%">
                <h1>Resumo do pedido</h1>
            </div>
            <hr>
            <div class="valorConfirma">
                <div class="valorSubtotal">
                    <h2 id="subtotalLabel">Subtotal</h2>
                    <div class="valorTotal" id="valorFinal">
                        <h2>R$ 10,00</h2>
                    </div>
                </div>
                <div class="confirm">
                    <input type="submit" value="Finalizar compra" id="confirm" onclick="finalizaCompra()">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h1>Seu Carrinho</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Fechar</div>
        </div>
    </div>
    <br>
    <footer>
        <div class="paginasFooter">
            <a href="index.html">
                <h4>Home</h4>
            </a>
            <a href="produtos.html">
                <h4>Produtos</h4>
            </a>
        </div>
        <hr>
        <h5>© 2023 StellarCart, Inc</h5>
    </footer>
    <script src="finalizar.js"></script>
    <script src="produtoscarrinho.js"></script>
</body>

</html>