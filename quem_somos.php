<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>SIAP</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <div id="quem-somos-banner">
            <nav class="transparent menu-topo" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="<?=$_SERVER['HTTP_HOST']?>" class="brand-logo"><img src="img/logo.png" class="logo responsive-img"></a>
                    <div class="lang right">
                        <a href="/en"><img src="img/en.png" class="margin5-right" /></a>
                        <a href="/br"><img src="img/br.png" /></a>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li><a href="quem_somos.php">QUEM SOMOS</a></li>
                        <li><a href="contato.php">CONTATO</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="sobre.php">SOBRE</a></li>
                        <li><a href="quem_somos.php">QUEM SOMOS</a></li>
                        <li><a href="contato.php">CONTATO</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div id="quemsomos-infos">
            <div class="container center-align">
                <div class="row">
                    <div class="col s12">
                        <div class="left">
                            <p><h2 class="verde-siap-escuro-text">Quem é SIAP ?</h2></p>
                            <p><h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet nunc </br>
                                vitae ligula rhoncus interdum. Donec semper urna in sapien vulputate molestie. Etiam rutrum,</br>
                                urna eu malesuada feugiat, enim enim pulvinar lectus, sed consequat tellus massa in magna.
                                Donec ac pharetra elit. Praesent semper justo nec urna dapibus porttitor. 
                                Maecenas vel feugiat ante, non ullamcorper est. Aenean felis magna, dapibus a semper et, mattis eget
                                dui. Donec dolor diam, ultrices eget dapibus vel, pharetra et nulla.
                            </h3></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="quemsomos-infos">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 right">
                        <h2 class="verde-siap-escuro-text">André Navajas</h2>
                        <hr class="verde-siap-escuro-text">
                        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet nunc </br>
                            vitae ligula rhoncus interdum. Donec semper urna in sapien vulputate molestie. Etiam rutrum,</br>
                            urna eu malesuada feugiat, enim enim pulvinar lectus, sed consequat tellus massa in magna.
                            Donec ac pharetra elit. Praesent semper justo nec urna dapibus porttitor. 
                            Maecenas vel feugiat ante, non ullamcorper est. Aenean felis magna, dapibus a semper et, mattis eget
                            dui. Donec dolor diam, ultrices eget dapibus vel, pharetra et nulla.
                        </p>
                    </div>                    
                    <div class="col s12 m6 left">
                        <img src="img/foto-2.png" width="450" height="300" class="responsive-img"/>
                    </div>                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div id="quemsomos-infos">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 left">
                        <h2 class="verde-siap-escuro-text">Alfredo Andreoni</h2>
                        <hr class="verde-siap-escuro-text verde-siap-escuro">
                        <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet nunc </br>
                            vitae ligula rhoncus interdum. Donec semper urna in sapien vulputate molestie. Etiam rutrum,</br>
                            urna eu malesuada feugiat, enim enim pulvinar lectus, sed consequat tellus massa in magna.
                            Donec ac pharetra elit. Praesent semper justo nec urna dapibus porttitor. 
                            Maecenas vel feugiat ante, non ullamcorper est. Aenean felis magna, dapibus a semper et, mattis eget
                            dui. Donec dolor diam, ultrices eget dapibus vel, pharetra et nulla.
                        </p>
                    </div>
                    <div class="col s12 m6 right">
                        <img src="img/foto-1.png" width="450" height="300" class="responsive-img"/>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer white">
            <div class="footer-copyright white">
                <div class="container by-txt">
                    <div class="row">
                        <div class="col s4">
                            Developed by <a href="">FSV</a>
                        </div>
                        <div class="col s8 right-align">
                            <b>SIAP</b> - Sociedade Imobiliária Agropecuária e Participações
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
            $(function () {
                $('li').hover(function () {
                    $(this).addClass('arrow_box');
                });
                $('li').mouseout(function () {
                    $(this).removeClass('arrow_box');
                });
            });
        </script>
    </body>
</html>