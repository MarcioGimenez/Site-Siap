<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>SIAP</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/screen.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link href="dist/photoswipe.css?v=4.1.1-1.0.4" rel="stylesheet" />
        <link href="dist/default-skin/default-skin.css?v=4.1.1-1.0.4" rel="stylesheet" />


        <script src="dist/photoswipe.min.js?v=4.1.1-1.0.4"></script>
        <script src="dist/photoswipe-ui-default.min.js?v=4.1.1-1.0.4"></script>
    </head>
    <body>


        <div id="index-banner">


            <nav class="transparent menu-topo" role="navigation">
                <div class="nav-wrapper container">


                    <a id="logo-container" href="<?= $_SERVER['HTTP_HOST'] ?>" class="brand-logo"><img src="img/logo.png" class="logo responsive-img"></a>
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
                    <div class="row">
                        <div class="txt-header right-align col s12 m12 l6 offset-l5">
                            <h1>Contribuição ativa no Agronegócio.</h1>
                            <p>Antenada as oportunidades na agropecuária, em um país com terras férteis e com clima facilitador para o plantio, a SIAP tem o objetivo de contribuir no crescimento e desenvolvimento desse importante setor da economia, o agronegócio. 
                            </p>
                        </div>
                    </div>
                    <div class="row row-txt-sobre">
                        <div class="txt-sobre right-align col s12 m12 l6 offset-l5">
                            <h2>SIAP. Inovação e resultados para o seu negócio.</h2>
                            <p>A SIAP é uma empresa de desenvolvimento agrícola focada no Mato Grosso. Especializada em recuperar áreas degradadas e transformar áreas de pecuária em lavouras de soja, milho e algodão. Além de cuidar da regularização fundiária, loteamento de grandes áreas e administração de fazendas em forma de grandes condomínios. </p>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="sobre-fazenda" class="row">
                <div class="container center-align col s12 m12 l6 offset-l5">
                    <br>
                    <h2>Fazenda Fronteira</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum erat orci, in fringilla dolor tincidunt in. In tristique erat massa. Nunc quam tellus, euismod ac sodales sit amet, dapibus ac diam. Nunc tincidunt a tellus vel tincidunt. Morbi non porttitor lectus. Phasellus enim purus, consequat eu lorem vel, bibendum condimentum neque.</p>
                    <br><br><br>
                </div>
            </div>   

            <div id="sobre-fazenda-icones" >
                <div class="container center-align row">
                    <div class="col s12 m4 l4">
                        <img src="img/fazenda-redondo-1.png">
                        <p>A SIAP é uma empresa de desenvolvimento agrícola focada no Mato Grosso. Especializada em recuperar áreas degradadas e transformar áreas de pecuária em lavouras de soja, milho e algodão. Além de cuidar da regularização fundiária, loteamento de grandes áreas e administração de fazendas em forma de grandes condomínios. </p>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="img/fazenda-redondo-2.png">
                        <p>A SIAP é uma empresa de desenvolvimento agrícola focada no Mato Grosso. Especializada em recuperar áreas degradadas e transformar áreas de pecuária em lavouras de soja, milho e algodão. Além de cuidar da regularização fundiária, loteamento de grandes áreas e administração de fazendas em forma de grandes condomínios. </p>
                    </div>
                    <div class="col s12 m4 l4">
                        <img src="img/fazenda-redondo-3.png">
                        <p>A SIAP é uma empresa de desenvolvimento agrícola focada no Mato Grosso. Especializada em recuperar áreas degradadas e transformar áreas de pecuária em lavouras de soja, milho e algodão. Além de cuidar da regularização fundiária, loteamento de grandes áreas e administração de fazendas em forma de grandes condomínios. </p>
                    </div>

                    <br>
                </div>
            </div>  
        </div>
        <div id="home-mapas">

            <div class="container center-align container-default">
                <nav class="transparent menu-mapas " role="navigation">
                    <div class="nav-wrapper container centralizar-filho">
                        <ul>
                            <li class="link-mapas"><a href="#" class="mapas-show" rel="localizacao">LOCALIZACAO</a></li>
                            <li class="link-mapas"><a href="#" class="mapas-show" rel="solo">SOLO</a></li>
                            <li class="link-mapas"><a href="#" class="mapas-show" rel="hidro">HIDROGRAFIA</a></li>
                            <li class="link-mapas"><a href="#" class="mapas-show" rel="galeria">GALERIA</a></li>
                        </ul>

                    </div>
                </nav>

                <div id="mapa-solo" class="row div-mapas">
                    <p><h3>Solo/Argila</h3></p>
                    <div id="texturas-solo">
                        <div id="textura-azul" class="col s3 center-align">
                            <img src="img/azul.png" class="show-img-textura hoverable" rel="azul"/>
                            <p>Textura acima de 30% <br>5,748.3 ha </p>
                        </div>
                        <div id="textura-laranja" class="col s3">
                            <img src="img/laranja.png" class="show-img-textura hoverable" rel="laranja"/>
                            <p>Textura entre 20 e 30% <br>1,813.8 ha </p>
                        </div>
                        <div id="textura-amarelo" class="col s3">
                            <img src="img/amarelo.png" class="show-img-textura hoverable" rel="amarelo"/>
                            <p>Textura entre 15 e 20% <br>4,896.6 ha </p>
                        </div>
                        <div id="textura-vermelho" class="col s3">
                            <img src="img/vermelho.png" class="show-img-textura hoverable" rel="vermelho"/>
                            <p>Textura abaixo de 15% <br>6,339.9 ha </p>
                        </div>
                    </div>

                    <div id="mapa-solo-default" class="col m11 offset-m1 right-align fotos-zoom zoom-solo div-mapas-texturas">
                        <img src="img/mapa-solo.png" class="responsive-img"/>
                    </div>

                    <div id="mapa-solo-azul" class="col m11 offset-m1 right-align fotos-zoom zoom-solo div-mapas-texturas">
                        <img src="img/mapa-azul-solo.png" class="responsive-img"/>
                    </div>
                    <div id="mapa-solo-laranja" class="col m11 offset-m1 right-align fotos-zoom zoom-solo div-mapas-texturas">
                        <img src="img/mapa-laranja-solo.png" class="responsive-img"/>
                    </div>
                    <div id="mapa-solo-amarelo" class="col m11 offset-m1 right-align fotos-zoom zoom-solo div-mapas-texturas">
                        <img src="img/mapa-amarelo-solo.png" class="responsive-img"/>
                    </div>  
                    <div id="mapa-solo-vermelho" class="col m11 offset-m1 right-align fotos-zoom zoom-solo div-mapas-texturas">
                        <img src="img/mapa-vermelho-solo.png" class="responsive-img"/>
                    </div>
                    <div id="mapa-solo-descricao" class="col m4 left-align">
                        <p class="center-align"><b>Terras Agrícolas</b></p>
                        <p> Total de área com lavoura...........9.028,2 ha</p>
                        <p> Área para desmate.....................10.341,7 ha</p>
                        <p> Reserva Legal..............................17,827,6 ha</p>
                        <p> Total.............................................47.197,5 ha</p>
                    </div>
                </div>  

                <div id="mapa-hidro" class="row div-mapas">
                    <p><h3>Abundância em água com os rios Papagaios, Honorato, Santa Cruz</h3></p>
                    <div id="mapa-hidro-default" class="col m12 fotos-zoom zoom-hidro">
                        <img src="img/mapa-hidrografico-pequeno.png" class="responsive-img"/>
                    </div>
                </div>

                <div id="mapa-localizacao" class="row div-mapas">
                    <p><h3>A área está localizada no município de Brasnorte em Mato Grosso</h3></p>
                    <div id="mapa-localizacao-default" class="col m12">
                        <img src="img/mapa-localizacao-fazenda.png" class="responsive-img"/>
                    </div>
                </div>
                <div id="mapa-galeria" class="row div-mapas">
                    <div class="row">
                        <div id="demo-test-gallery" class="demo-gallery">

                            <a href="galeria/1600x1060/IMG_4062.jpg" data-size="1600x1068" data-med="galeria/1024x680/IMG_4062.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4062.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4068.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4068.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4068.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4103.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4103.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4103.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4104.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4104.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4104.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4105.jpg" data-size="1600x1068" data-med="galeria/1024x680/IMG_4105.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4105.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4106.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4106.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4106.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4115.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4115.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4115.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4118.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4118.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4118.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4120.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4120.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4121.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4121.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4121.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4121.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4122.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4122.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4122.jpg" alt="" class="hoverable"/>
                            </a>

                            <a href="galeria/1600x1060/IMG_4128.jpg" data-size="1600x1067" data-med="galeria/1024x680/IMG_4128.jpg" data-med-size="1024x683" >
                                <img src="galeria/240x160/IMG_4128.jpg" alt="" class="hoverable"/>
                            </a>

                        </div>

                    </div>

                    <div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="pswp__bg"></div>

                        <div class="pswp__scroll-wrap">

                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">

                                    <div class="pswp__counter"></div>

                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                <div class="pswp__caption">
                                    <div class="pswp__caption__center">
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>


        <div class="light-box">
            <div class="light-box-bg"></div>

            <div id="light-box-container" class="light-box-solo box-container">
                <div class="container center-align">
                    <div class="fechar-box row">
                        <img src="img/fechar-light-box.png" class="right"/>
                    </div>

                    <div id="mapa-solo-box" class="row div-mapas">
                        <div id="texturas-solo">
                            <div id="textura-azul" class="col s3 center-align">
                                <img src="img/azul.png" class="show-img-textura-box" rel="azul"/>
                                <p>Textura acima de 30% <br>5,748.3 ha </p>
                            </div>
                            <div id="textura-laranja" class="col s3">
                                <img src="img/laranja.png" class="show-img-textura-box" rel="laranja"/>
                                <p>Textura entre 20 e 30% <br>1,813.8 ha </p>
                            </div>
                            <div id="textura-amarelo" class="col s3">
                                <img src="img/amarelo.png" class="show-img-textura-box" rel="amarelo"/>
                                <p>Textura entre 15 e 20% <br>4,896.6 ha </p>
                            </div>
                            <div id="textura-vermelho" class="col s3">
                                <img src="img/vermelho.png" class="show-img-textura-box" rel="vermelho"/>
                                <p>Textura abaixo de 15% <br>6,339.9 ha </p>
                            </div>
                        </div>

                        <div id="mapa-solo-default-box" class="col s12 right-align div-mapas-texturas-box">
                            <img id="zoom-mapa-default-img"  src="img/mapa-grande-completo.png" class="responsive-img"/>
                        </div>

                        <div id="mapa-solo-azul-box" class="col m11 offset-m1 right-align div-mapas-texturas-box">
                            <img id="zoom-mapa-azul-img" src="img/mapa-grande-azul.png" class="responsive-img"/>
                        </div>
                        <div id="mapa-solo-laranja-box" class="col m11 offset-m1 right-align div-mapas-texturas-box">
                            <img id="zoom-mapa-laranja-img" src="img/mapa-grande-laranja.png" class="responsive-img"/>
                        </div>
                        <div id="mapa-solo-amarelo-box" class="col m11 offset-m1 right-align div-mapas-texturas-box">
                            <img id="zoom-mapa-amarelo-img" src="img/mapa-grande-amarelo.png" class="responsive-img"/>
                        </div>  
                        <div id="mapa-solo-vermelho-box" class="col m11 offset-m1 right-align div-mapas-texturas-box">
                            <img id="zoom-mapa-vermelho-img" src="img/mapa-grande-vermelho.png" class="responsive-img"/>
                        </div>
                    </div>
                </div>
            </div>

            <div id="light-box-container" class="light-box-hidro box-container">

                <div class="container center-align">
                    <div class="row fechar-box">
                        <img src="img/fechar-light-box.png" class="right"/>
                    </div>
                    <div id="mapa-hidro-default-box" class="col s12">
                        <img id="zoom-hidro-img" src="img/mapa-hidrogafico-grande.jpg" class="responsive-img"/>
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
        <script src='js/jquery.elevatezoom.js'></script>
        <script>

          $(function () {

              $('li').hover(function () {
                  $(this).addClass('arrow_box');
              });
              $('li').mouseout(function () {
                  $(this).removeClass('arrow_box');
              });

              $('.link-mapas').hover(function () {
                  $(this).addClass('arrow_box_mapas');
              });
              $('.link-mapas').mouseout(function () {
                  $(this).removeClass('arrow_box_mapas');
              });

              $('.mapas-show').click(function () {

                  $('.div-mapas').hide();
                  $('#mapa-' + $(this).attr('rel')).show();

                  return false;
              });
              $('.show-img-textura').click(function () {
                  $('.div-mapas-texturas').hide();
                  $('#mapa-solo-' + $(this).attr('rel')).show();
                  return false;
              });
              $('.show-img-textura-box').click(function () {
                  $('.div-mapas-texturas-box').hide();
                  $('#mapa-solo-' + $(this).attr('rel') + '-box').show();
                  return false;
              });
              $('.fechar-box').click(function () {
                  $('.box-container').hide();
                  $('.light-box-bg').hide();
                  $('.light-box').hide();
                  $('.container-default').show();
                  $('html, body').css({
                      overflow: 'auto',
                      height: 'auto'
                  });
                  return false;
              });
              $('.zoom-solo').click(function () {
                  $('.container-default').hide();
                  $('.light-box').show();
                  $('.light-box-solo').show();
                  $('.light-box-bg').show();
                  $('body').animate({scrollTop: $('body')[0].scrollHeight}, 200);
                  $('#mapa-solo-box').show();
                  $('html, body').css({
                      overflow: 'hidden',
                      height: '100%'
                  });
                  return false;
              });
              $('.zoom-hidro').click(function () {
                  $('.container-default').hide();
                  $('.light-box').show();
                  $('.light-box-bg').show();
                  $('body').animate({scrollTop: $('body')[0].scrollHeight}, 200);
                  $('.light-box-hidro').show();
                  $('html, body').css({
                      overflow: 'hidden',
                      height: '100%'
                  });
                  return false;
              });


          });
          /*  $('#zoom-hidro-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});
           $('#zoom-mapa-default-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});
           $('#zoom-mapa-azul-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});
           $('#zoom-mapa-amarelo-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});
           $('#zoom-mapa-laranja-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});
           $('#zoom-mapa-vermelho-img').elevateZoom({zoomType: "lens", lensShape: "round", lensSize: 500});*/

        </script>


        <script type="text/javascript">
          (function () {

              var initPhotoSwipeFromDOM = function (gallerySelector) {

                  var parseThumbnailElements = function (el) {
                      var thumbElements = el.childNodes,
                              numNodes = thumbElements.length,
                              items = [],
                              el,
                              childElements,
                              thumbnailEl,
                              size,
                              item;

                      for (var i = 0; i < numNodes; i++) {
                          el = thumbElements[i];

                          // include only element nodes 
                          if (el.nodeType !== 1) {
                              continue;
                          }

                          childElements = el.children;

                          size = el.getAttribute('data-size').split('x');

                          // create slide object
                          item = {
                              src: el.getAttribute('href'),
                              w: parseInt(size[0], 10),
                              h: parseInt(size[1], 10),
                              author: el.getAttribute('data-author')
                          };

                          item.el = el; // save link to element for getThumbBoundsFn

                          if (childElements.length > 0) {
                              item.msrc = childElements[0].getAttribute('src'); // thumbnail url
                              if (childElements.length > 1) {
                                  item.title = childElements[1].innerHTML; // caption (contents of figure)
                              }
                          }


                          var mediumSrc = el.getAttribute('data-med');
                          if (mediumSrc) {
                              size = el.getAttribute('data-med-size').split('x');
                              // "medium-sized" image
                              item.m = {
                                  src: mediumSrc,
                                  w: parseInt(size[0], 10),
                                  h: parseInt(size[1], 10)
                              };
                          }
                          // original image
                          item.o = {
                              src: item.src,
                              w: item.w,
                              h: item.h
                          };

                          items.push(item);
                      }

                      return items;
                  };

                  // find nearest parent element
                  var closest = function closest(el, fn) {
                      return el && (fn(el) ? el : closest(el.parentNode, fn));
                  };

                  var onThumbnailsClick = function (e) {
                      e = e || window.event;
                      e.preventDefault ? e.preventDefault() : e.returnValue = false;

                      var eTarget = e.target || e.srcElement;

                      var clickedListItem = closest(eTarget, function (el) {
                          return el.tagName === 'A';
                      });

                      if (!clickedListItem) {
                          return;
                      }

                      var clickedGallery = clickedListItem.parentNode;

                      var childNodes = clickedListItem.parentNode.childNodes,
                              numChildNodes = childNodes.length,
                              nodeIndex = 0,
                              index;

                      for (var i = 0; i < numChildNodes; i++) {
                          if (childNodes[i].nodeType !== 1) {
                              continue;
                          }

                          if (childNodes[i] === clickedListItem) {
                              index = nodeIndex;
                              break;
                          }
                          nodeIndex++;
                      }

                      if (index >= 0) {
                          openPhotoSwipe(index, clickedGallery);
                      }
                      return false;
                  };

                  var photoswipeParseHash = function () {
                      var hash = window.location.hash.substring(1),
                              params = {};

                      if (hash.length < 5) { // pid=1
                          return params;
                      }

                      var vars = hash.split('&');
                      for (var i = 0; i < vars.length; i++) {
                          if (!vars[i]) {
                              continue;
                          }
                          var pair = vars[i].split('=');
                          if (pair.length < 2) {
                              continue;
                          }
                          params[pair[0]] = pair[1];
                      }

                      if (params.gid) {
                          params.gid = parseInt(params.gid, 10);
                      }

                      return params;
                  };

                  var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
                      var pswpElement = document.querySelectorAll('.pswp')[0],
                              gallery,
                              options,
                              items;

                      items = parseThumbnailElements(galleryElement);

                      // define options (if needed)
                      options = {
                          galleryUID: galleryElement.getAttribute('data-pswp-uid'),
                          getThumbBoundsFn: function (index) {
                              // See Options->getThumbBoundsFn section of docs for more info
                              var thumbnail = items[index].el.children[0],
                                      pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                                      rect = thumbnail.getBoundingClientRect();

                              return {x: rect.left, y: rect.top + pageYScroll, w: rect.width};
                          },
                          addCaptionHTMLFn: function (item, captionEl, isFake) {
                              if (!item.title) {
                                  captionEl.children[0].innerText = '';
                                  return false;
                              }
                              captionEl.children[0].innerHTML = item.title + '<br/><small>Photo: ' + item.author + '</small>';
                              return true;
                          }

                      };


                      if (fromURL) {
                          if (options.galleryPIDs) {
                              // parse real index when custom PIDs are used 
                              // http://photoswipe.com/documentation/faq.php#custom-pid-in-url
                              for (var j = 0; j < items.length; j++) {
                                  if (items[j].pid == index) {
                                      options.index = j;
                                      break;
                                  }
                              }
                          } else {
                              options.index = parseInt(index, 10) - 1;
                          }
                      } else {
                          options.index = parseInt(index, 10);
                      }

                      // exit if index not found
                      if (isNaN(options.index)) {
                          return;
                      }



                      var radios = document.getElementsByName('gallery-style');
                      for (var i = 0, length = radios.length; i < length; i++) {
                          if (radios[i].checked) {
                              if (radios[i].id == 'radio-all-controls') {
                                  options.mainClass = 'pswp--minimal--dark';
                                  options.barsSize = {top: 0, bottom: 0};
                                  options.captionEl = false;
                                  options.fullscreenEl = false;
                                  options.shareEl = false;
                                  options.bgOpacity = 0.85;
                                  options.tapToClose = true;
                                  options.tapToToggleControls = false;
                              } else if (radios[i].id == 'radio-minimal-black') {
                                  options.mainClass = 'pswp--minimal--dark';
                                  options.barsSize = {top: 0, bottom: 0};
                                  options.captionEl = false;
                                  options.fullscreenEl = false;
                                  options.shareEl = false;
                                  options.bgOpacity = 0.85;
                                  options.tapToClose = true;
                                  options.tapToToggleControls = false;
                              }
                              break;
                          }
                      }

                      if (disableAnimation) {
                          options.showAnimationDuration = 0;
                      }

                      // Pass data to PhotoSwipe and initialize it
                      gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);

                      // see: http://photoswipe.com/documentation/responsive-images.php
                      var realViewportWidth,
                              useLargeImages = false,
                              firstResize = true,
                              imageSrcWillChange;

                      gallery.listen('beforeResize', function () {

                          var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
                          dpiRatio = Math.min(dpiRatio, 2.5);
                          realViewportWidth = gallery.viewportSize.x * dpiRatio;


                          if (realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200) {
                              if (!useLargeImages) {
                                  useLargeImages = true;
                                  imageSrcWillChange = true;
                              }

                          } else {
                              if (useLargeImages) {
                                  useLargeImages = false;
                                  imageSrcWillChange = true;
                              }
                          }

                          if (imageSrcWillChange && !firstResize) {
                              gallery.invalidateCurrItems();
                          }

                          if (firstResize) {
                              firstResize = false;
                          }

                          imageSrcWillChange = false;

                      });

                      gallery.listen('gettingData', function (index, item) {
                          if (useLargeImages) {
                              item.src = item.o.src;
                              item.w = item.o.w;
                              item.h = item.o.h;
                          } else {
                              item.src = item.m.src;
                              item.w = item.m.w;
                              item.h = item.m.h;
                          }
                      });

                      gallery.init();
                  };

                  // select all gallery elements
                  var galleryElements = document.querySelectorAll(gallerySelector);
                  for (var i = 0, l = galleryElements.length; i < l; i++) {
                      galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                      galleryElements[i].onclick = onThumbnailsClick;
                  }

                  // Parse URL and open gallery if it contains #&pid=3&gid=1
                  var hashData = photoswipeParseHash();
                  if (hashData.pid && hashData.gid) {
                      openPhotoSwipe(hashData.pid, galleryElements[ hashData.gid - 1 ], true, true);
                  }
              };

              initPhotoSwipeFromDOM('.demo-gallery');

          })();

        </script>

    </body>
</html>