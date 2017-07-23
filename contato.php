<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>SIAP</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://siapagro.com/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://siapagro.com/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://siapagro.com/css/screen.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
        <?php
        if ($_GET['msg'] == 'ok') {
          echo '<script> alert(\'Mensagem enviada com Sucesso!!!\'); </script>';
        }
        if ($_GET['msg'] == 'erro') {
          echo '<script> alert(\'Erro ao enviar a Mensagem\'); </script>';
        }
        ?>
        <div id="contato-banner">
            <nav class="transparent menu-topo" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="https://siapagro.com/br" class="brand-logo"><img src="https://siapagro.com/img/logo.png" class="logo responsive-img"></a>
                    <div class="lang right">
                        <a href="https://siapagro.com/en/contact"><img src="https://siapagro.com/img/en.png" class="margin5-right" /></a>
                        <a href="https://siapagro.com/br/contato"><img src="https://siapagro.com/img/br.png" class="lang_hover"/></a>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="https://siapagro.com/br">HOME</a></li>
                        <li><a href="https://siapagro.com/br/sobre">SOBRE</a></li>
                        <li><a href="https://siapagro.com/br/quem_somos">QUEM SOMOS</a></li>
                        <li class="arrow_box"><a href="https://siapagro.com/br/contato">CONTATO</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="https://siapagro.com/br">HOME</a></li>
                        <li><a href="https://siapagro.com/br/sobre">SOBRE</a></li>
                        <li><a href="https://siapagro.com/br/quem_somos">QUEM SOMOS</a></li>
                        <li><a href="https://siapagro.com/br/contato">CONTATO</a></li>
                    </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div id="contato-infos">
            <div class="container center-align">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="center grey-text text-darken-1">
                            <i class="material-icons medium">phone</i>
                            <p class="infos-descricao">TELEFONE
                                <br>+55 11 3508.8999</p>
                            <p class="infos-descricao"></p>
                        </div>
                        <br><br>
                    </div>
                    <div class="col s12 m4">
                        <div class="center grey-text text-darken-1">
                            <i class="material-icons medium">email</i>
                            <p class="infos-descricao">E-MAIL
                                <br>contato@siapagro.com</p>
                            <p class="infos-descricao"></p>
                        </div>
                        <br><br>
                    </div>
                    <div class="col s12 m4">
                        <div class="center grey-text text-darken-1">
                            <i class="material-icons medium">room</i>
                            <p class="infos-descricao">ENDEREÇO
                                <br>Rua Joaquim Floriano, Nº 466 10º Andar <br> Ed. Corporate | Itaim Bibi | São Paulo | SP</p>
                            <p class="infos-descricao"></p>
                        </div>
                        <br><br>
                    </div>
                </div>
                <br>
            </div>
        </div> 
        <div id="contato-msg">
            <div class="container center-align">
                <h2 class="left verde-siap-escuro-text">Enviar Mensagem</h2>
                <div class="row">
                    <form class="col s12" action="https://siapagro.com/env-contato.php" method="post">
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nome" name="nome" type="text">
                                <label for="Nome" data-error="wrong" data-success="right">Nome</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="msg" name="msg" class="materialize-textarea"></textarea>
                                <label for="msg" data-error="wrong" data-success="right">Mensagem</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light right verde-siap-escuro" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="contato-mapa">
            <div class="center-align">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.556479014613!2d-46.67735128541196!3d-23.58436756832652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce575e9cd5884f%3A0x221e3e0c6fa6eeec!2sBrascam+-+R.+Joaquim+Floriano%2C+466+-+Itaim+Bibi%2C+S%C3%A3o+Paulo+-+SP%2C+04534-002!5e0!3m2!1spt-BR!2sbr!4v1497585599710" height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
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
        <script src="https://siapagro.com/js/materialize.js"></script>
        <script src="https://siapagro.com/js/init.js"></script>
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