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
        
    </head>
    <body>
        <div id="sobre-banner">
            <nav class="transparent menu-topo" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="https://siapagro.com/br" class="brand-logo"><img src="https://siapagro.com/img/logo.png" class="logo responsive-img"></a>
                    <div class="lang right">
                        <a href="https://siapagro.com/en/about"><img src="https://siapagro.com/img/en.png" class="margin5-right lang_hover" /></a>
                        <a href="https://siapagro.com/br/sobre"><img src="https://siapagro.com/img/br.png" /></a>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="https://siapagro.com/en">HOME</a></li>
                        <li class="arrow_box"><a href="https://siapagro.com/en/about">ABOUT</a></li>
                        <li><a href="https://siapagro.com/en/who_we_are">WHO WE ARE</a></li>
                        <li><a href="https://siapagro.com/en/contact">CONTACT</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="https://siapagro.com/en">HOME</a></li>
                        <li><a href="https://siapagro.com/en/about">ABOUT</a></li>
                        <li><a href="https://siapagro.com/en/who_we_are">WHO WE ARE</a></li>
                        <li><a href="https://siapagro.com/en/contact">CONTACT</a></li>
                    </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div id="quemsomos-infos">
            <div class="container center-align">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="left">
                            <p><h2 class="verde-siap-escuro-text">Who is  SIAP ?</h2></p>

                            <p>
                                In 2013, SIAP is born, a company that aims at agricultural development, aimed at the small and medium producers, which seeks the opportunity to acquire their own space, providing all the necessary infrastructure so that the farmer can produce and guarantee progress Of its crops, counting on the resources of the farm made possible by SIAP.
                                <br><br> As a company always aware of the changes in the agricultural scenario in Brazil and in the world, SIAP saw the opportunity in the country that became an important producer and trader of soy and corn and invested in the creation of condominiums of allotment for agricultural production. With this started the Fronteira Farm project, located in the state of Mato Grosso, with agricultural land of high productive potential, with 47 thousand hectares, where currently 20 thousand are ready for production.
                                 <br><br>Our mission is to guarantee the agricultural development, providing the best structure and generating facilitators to guarantee the success of the production, being a link between the productive chain and the market, assuring the return of capital to both producers and investors, valuing the man in the field.
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
                            <a href="http://cargocollective.com/flaviovita" target="_blank"><img src="https://siapagro.com/img/logo-flavioshu.jpg" class="responsive-img"/></a>
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