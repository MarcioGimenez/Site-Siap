<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>SIAP</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://siapagro.com/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://siapagro.com/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://siapagro.com/css/screen.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body>
        <div id="sobre-banner">
            <nav class="transparent menu-topo" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="https://siapagro.com/br" class="brand-logo"><img src="https://siapagro.com/img/logo.png" class="logo responsive-img"></a>
                    <div class="lang right">
                        <a href="https://siapagro.com/en/about"><img src="https://siapagro.com/img/en.png" class="margin5-right" /></a>
                        <a href="https://siapagro.com/br/sobre"><img src="https://siapagro.com/img/br.png" class="lang_hover"/></a>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="https://siapagro.com/br">HOME</a></li>
                        <li class="arrow_box"><a href="https://siapagro.com/br/sobre">SOBRE</a></li>
                        <li><a href="https://siapagro.com/br/quem_somos">QUEM SOMOS</a></li>
                        <li><a href="https://siapagro.com/br/contato">CONTATO</a></li>
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

        <div id="quemsomos-infos">
            <div class="container center-align">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="left">
                            <p><h2 class="verde-siap-escuro-text">Quem é SIAP ?</h2></p>

                            <p>
                                Em 2013, nasce a SIAP, uma empresa que tem como objetivo o desenvolvimento agrícola, voltada para o pequeno e médio produtor, que busca a oportunidade de adquirir um espaço próprio, disponibilizando toda a infraestrutura necessária para que o agricultor possa produzir e garantir o progresso de suas safras, contando com os recursos da fazenda viabilizados pela SIAP. <br> <br>
                                Como uma empresa sempre antenada as mudanças no cenário agropecuário no Brasil e no mundo, a SIAP viu a oportunidade no país que se tornou um importante produtor e comerciante de soja e milho e investiu na criação de condomínios de loteamento para produção agrícola. Com isso iniciou o projeto da Fazenda Fronteira, situada no estado do Mato Grosso, com terras agrícolas de alto potencial produtivo, com 47 mil hectares, onde atualmente 20 mil estão prontos para produção.<br>  <br>
                                Nossa missão é garantir o desenvolvimento agropecuário, fornecendo a melhor estrutura e gerando facilitadores para garantir o sucesso da produção, sendo um elo entre a cadeia produtiva e o mercado, assegurando o retorno do capital tanto aos produtores, quanto aos investidores, valorizando o homem no campo. <br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer white">
            <div class="footer-copyright white">
                <div class="container by-txt">
                    <div class="row">
                        <div class="col s4">
                            By <a href="http://cargocollective.com/flaviovita" target="_blank"><img src="img/logo-flavioshu.jpg" class="responsive-img" width="30"/></a>
                        </div>
                        <div class="col s8 right-align">
                            © 2017 - SIAP
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