<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiteVenda</title>
    <!-- css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="menu" id="menu">

        <div class="menu_ shadow-sm" id="menu_">
            <nav class="menu__menu-mobile p-md-1" id="menu__menu-mobile">         
                
                <!-- Logo -->
                <div class="menu__menu-mobile__logo">
                    <a href="" class="link">
                        <h1>LOGO</h1>
                    </a>
                </div>
                <!-- Fim logo -->
    
                <!-- Menu -->
                
                <div class="menu__menu-mobile-desktop d-md-none">
                    <div class="menu__menu-mobile__icon-menu">
                        <button class="btn_compras">
                            <a href="pagCompra.php" class="link">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </button>
                        <button class="btn_menu" id="btn_menu">
                            <i class="fa fa-bars" id="fa-bars" aria-hidden="true"></i>
                            <i class="fa fa-times d-none" id="fa-times" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!--- media 900 --->
                    <div class="menu__menu-mobile__ menu__menu-mobile__close" id="menu__menu-mobile__">
                        <ul class="menu__menu-mobile__list">
                            <li class="menu__menu-mobile__item">
                                <a href="index.php" class="menu__menu-mobile__link link">Início</a>
                            </li>
                            <li class="menu__menu-mobile__item">
                                <a href="sobrenos.php" class="menu__menu-mobile__link link">Sobre nós</a>
                            </li>
                            <li class="menu__menu-mobile__item">
                                <a href="produtos.php" class="menu__menu-mobile__link link">Produtos</a>
                            </li>
                            <li class="menu__menu-mobile__item">
                                <a href="contato.php" class="menu__menu-mobile__link link">Contato</a>
                            </li>
                        </ul>
                    </div>
      
                </div>
                <!-- Fim menu mobile-->

                <!-- Media 901 -->
                <div class="menu__menu-desktop d-none">
                    <ul class="d-md-inline">
                        <li class="menu__menu-desktop__list mr-md-2">
                            <a class="menu__menu-desktop__link" href="index.php">Início</a>
                        </li>
                        <li class="menu__menu-desktop__list mr-md-2">
                            <a class="menu__menu-desktop__link" href="sobrenos.php">Sobre nós</a>
                        </li>
                        <li class="menu__menu-desktop__list mr-md-2">
                            <a class="menu__menu-desktop__link" href="produtos.php">Produtos</a>
                        </li>
                        <li class="menu__menu-desktop__list mr-md-2">
                            <a class="menu__menu-desktop__link" href="contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
    
            </nav>
        </div>
        
        <!-- Search -->
        <div class="search d-md-none">
            <form action="" method="post" id="search">
                <div>
                    <input type="search" name="" id="">
                    <input type="submit" value="Pesquisar">
                </div>
            </form>
        </div>
        <!-- Fim search -->

    </section>

    <section>

    </section>

    <!-- js-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('#btn_menu').click(function(){

                if($('#menu__menu-mobile__').hasClass('menu__menu-mobile__close')){
                    $('#menu__menu-mobile__').removeClass('menu__menu-mobile__close');
                    $('#fa-bars').addClass('d-none');
                    $('#fa-times').removeClass('d-none');
                }else{
                    $('#menu__menu-mobile__').addClass('menu__menu-mobile__close');
                    $('#fa-times').addClass('d-none');
                    $('#fa-bars').removeClass('d-none');
                }
            });
        });
    </script>
</body>
</html>