<?php

include 'fixed_files/header.php';
?>


<div class="">
    <div id="myCarousel" class="carousel slide">
        <!--
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: 150px">

            <?php
            for ($i = 0; $i < 1; $i++):

                if ($i == 0):
                    $active = 'active';
                else:
                    $active = '';

                endif;
                ?>
                <div class="item item1 <?php echo $active; ?>">
                    <div class="fill" style=" background-color:#48c3af;">
                        <div class="inner-content">
                            <div class="carousel-img">
                                <img
                                    style="height:400px;width: 100%; object-fit: cover; object-position: center;"
                                    src="https://thumbcdn-z.hotelurbano.net/d9lCYdJwPpf9ywvvwjil6ngkxpw=/1920x440/https://especiais.s3.amazonaws.com/images/b675a592-c085-40b4-860d-da33b006852e.jpg"
                                    alt="" class="img img-responsive"/>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endfor; ?>

        </div>
    </div>
</div>

<div id="hu-promocoes-banner_wide-id">
    <div>
        <div class="hu-promocoes-banner_wide">
            <div style="position:relative;margin:0">

                <style>

                    .floats {

                        background: #dee4dd;
                        z-index: 10000000000000;
                        width: 100%;
                        float: left;
                        padding: 1% 15% 1% 15%;
                    }

                    .floats li {

                        float: left;
                        margin: 0 2% 0 0;
                    }
                </style>
                <!--<a class="mapx-produto-pacotes-click-banner_promo"
                                                       href="https://www.hotelurbano.com/campanha/top-destinos"
                                                       target="_self"
                                                       style="background-image: url(//cdn.hotelurbano.com/images/banners/5586c3253a48ec6aeaf9626a580bd0f0.jpg);background-position: center center;background-repeat: no-repeat;height: 30px;width: 100%;display: block;"> </a> -->
                <ul class="floats" style="">

                    <li>Macaé/ Rio das Ostras&nbsp; &nbsp;></li>
                    <li>Restaurantes&nbsp;&nbsp; ></li>
                    <li>Sorveterias&nbsp;&nbsp; ></li>
                    <li>Sorverte Italia - Shopping Piaza Macaé</li>


                </ul>
            </div>
            <div id="hu-promocoes-banner_lightbox-id" class="hu-promocoes-banner_lightbox"
                 style="display:none;border: 1px solid #d5d4d4;box-shadow: 1px 1px 5px #000;height: 470px;left: 50%;margin: -235px 0 0 -426px;position: fixed;top: 50%;width: 852px;z-index: 9999;background-color: #fff;">
                <div class="hu-promocoes-banner_lightbox-title"
                     style="border-bottom: 1px solid #d5d4d4;background: #003965;font-size: 18px;text-transform: uppercase;color: #fff;font-weight: bold;padding: 10px;width: 832px;">
                    Promoção - REGULAMENTO
                </div>
                <div class="hu-promocoes-banner_lightbox-regulamento"
                     style="overflow-y: scroll;overflow-x: hidden;height: 407px;color: #696969;padding:10px"></div>
                <a href="#" class="hu-promocoes-banner_lightbox-close mapx-produto-pacotes-click-regras_popup-fechar"
                   style="height: 18px;padding: 4px;right: -14px;top: -14px;width: 19px;background: #062942;border: 1px solid #fff;border-radius: 100%;color: #fff;position: absolute;text-align: center;text-decoration: none;font-weight: bold;"><strong>X</strong></a>
            </div>
        </div>
        <div class="hu-promocoes-banner_modal"
             style="background: #000;height: 100%;left: 0;position: fixed;text-align: center;top: 0;width: 100%;z-index: 1499;display:none;"></div>
    </div>
</div>
<main role="main">
    <div class="">

        <section itemscope itemtype="http://schema.org/Hotel" id="wrap-content">
  <span class="promotion-sku" data-promotion-sku="NHU-7417-0-0-0-0">
  <div class="content">
    <section id="wrap-page-head">
      <div class="head-name-address col-left">
        <span class="hotel-stars">

              <i class="icon-star"></i>

              <i class="icon-star"></i>

              <i class="icon-star"></i>

              <i class="icon-star"></i>

        </span>
        <h1 class="page-title">
          <span itemprop="name" class="page-title-text">
            Búzios Beach Resort
          </span>
        </h1>
        <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span class="text address-full">
            <span itemprop="streetAddress">Avenida dos Tucuns,            Quadra H, Lote 1</span>,
            <span itemprop="addressLocality">Armação dos Búzios</span>,
            <span itemprop="addressRegion">Rio de Janeiro</span> -
            <span itemprop="addressCountry">Brasil</span> -
            28950-000
          </span>
          <span class="text">
            Armação dos Búzios, Rio de Janeiro - Brasil
          </span>
          <span class="seemap seemap_link_address"
                data-on="click"
                data-event-category="Página_de_hotel"
                data-event-action="Click_ver_mapa"
                data-event-label="lado_título">
            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> ver o mapa
          </span>
        </address>
      </div>

        <div class="feature-price-right col-right">
          <div class="col-right" itemscope itemtype="http://schema.org/Offer">
            <span class="feature-price-min-text">
              <b>Oferta</b> a partir de
              <span class="promotion-currency promotion-price-original" style="text-decoration: line-through;"
                    data-promotion-price-original>234</span><br/>
            </span>
            <span class="feature-price-min-value" style="color: #f13744">
              <span itemprop="priceCurrency" content="BRL">R$</span>
              <span data-promotion-price itemprop="price" content="840" class="promotion-price">
                840
              </span>
            </span>
          </div>
        </div>
        <div class="clear"></div>
      </section><!--#wrap-page-head-->
    </div>
    <div class="content">

      <section id="wrap-gallery">
   <div class="container">

<div class="carousel slide article-slide" id="article-photo-carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner cont-slider">

    <div class="item active">
      <img style="width: 1200px; height: 400px;" alt="" title="" src="https://thumbcdn-z.hotelurbano.net/d9lCYdJwPpf9ywvvwjil6ngkxpw=/1920x440/https://especiais.s3.amazonaws.com/images/b675a592-c085-40b4-860d-da33b006852e.jpg" class="img-responsive">
    </div>
      <div class="item">
      <img style="width: 1200px; height: 400px;" alt="" title="" src="https://thumbcdn-z.hotelurbano.net/-es_Pe8wNHE_UjlWT4R67WLhXvY=/1920x440/https://especiais.s3.amazonaws.com/images/e2b8a614-93e0-4c08-8639-a1b16fdd857d.png" class="img-responsive">
    </div>

  </div>
    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
      <img alt="" src="https://thumbcdn-z.hotelurbano.net/d9lCYdJwPpf9ywvvwjil6ngkxpw=/1920x440/https://especiais.s3.amazonaws.com/images/b675a592-c085-40b4-860d-da33b006852e.jpg" class="img-responsive">
    </li>
      <li  data-slide-to="1" data-target="#article-photo-carousel">
      <img alt="" src="https://thumbcdn-z.hotelurbano.net/-es_Pe8wNHE_UjlWT4R67WLhXvY=/1920x440/https://especiais.s3.amazonaws.com/images/e2b8a614-93e0-4c08-8639-a1b16fdd857d.png" class="img-responsive">
    </li>

  </ol>
</div>

</div>
        <div class="clear"></div>
      </section><!--#wrap-gallery-->

      <section id="wrap-calendar" style="background: #ffffff;border: none;padding: 0;">
        <div>
          <form id="formCalendarTop" class="formCalendar" data-max-children-age="11">


            <div class="row">
              <div class="column col-lg-12" style="text-align: center;">
                  <h1 style="font-weight: bold; color: #343434;">R$ <span style="font-size: 30pt;">1</span></h1>
                  <p style="padding-bottom: 4px; font-weight: 600;">45 vendidos</p><br>

                <a type="button" style="padding: 5% 15% 5% 15%;font-size: 15pt;"
                   class="form-control-hu btn-large btn-search-availabilities">Comprar</a><br><br>
                  <p style="color: #d58512;font-weight: 600;font-size: 10pt;">Adquira já esta oferta</p>

                  <span style="font-size: 14pt;font-weight: bold">19%</span>
                  <p style="text-transform: uppercase;color: #878485;font-size: 10pt;">de desconto</p>

                  <hr style="background: black;margin-top: 10px;margin-bottom: 10px;">

                  <span style="font-size: 13pt;font-weight: bold;">3003-0202</span>
                  <p style="text-transform: uppercase;color: #878485;font-size: 10pt;">Compre pelo Telefone</p>

              </div>


              </div>
          </form>
        </div>
      </section><!--#wrap-calendar-->

        <section id="wrap-calendar" style="padding-top: 8px; padding-bottom:0;width: 25%; margin:0 3% 0 0;left: 1%;">


            <div class="row">
              <div class="column col-lg-12" style="text-align: center;">


                  <p style="font-size: 12pt;text-transform: uppercase;font-weight: 600;">Por tempo Limitado!</p>
                  <p style="font-size: 12pt;text-transform: uppercase;font-weight: 600;">67080 dias 20:41:48</p>

              </div>


              </div>



      </section><!--#wrap-calendar-->

        <section id="wrap-calendar"
                 style="padding-top: 8px; padding-bottom:0;width: 25%; margin:1% 3% 0 0;left: 1%;background: none;border: none;">


            <div class="row">
              <div class="column col-lg-12" style="text-align: center;">


                <a href="" type="button"
                   style="text-decoration:none;text-transform:uppercase;background:none; border:1px solid #292929; padding: 3% 5% 3% 5%; width:100%;font-size: 10pt;color: #404040;"
                   class="">Compartilhe essa Oferta</a>

              </div>


              </div>



      </section><!--#wrap-calendar-->



    </div>
    </span>
            <div class="clear"></div>

    </div>

    <section class="hotel-resume">
        <div class="content" style="padding: 0 15% 0 15%;">

            <div class="row">


                <div class="col-md-3 col-sm-6 col-xs-12 hotel-resume__box">
                    <div class="review-tp">
                        <div class="review-tp__resume">
                            <p class="review-tp__resume-classification">
                                Avaliação TripAdvisor
                            </p>
                            <div class="review-tp__resume-rating">
                                <img
                                    src="https://www.tripadvisor.com.br/img/cdsi/img2/ratings/traveler/4.0-23271-5.svg"
                                    alt="Review TripAdvisor">
                            </div>
                            <div class="review-tp__resume-num_reviews">
                                <p>
                                    baseada em 356 avaliações
                                </p>
                                <a href="#review-atributos"
                                   data-scroll-to="#review-atributos-list"
                                   data-active-tab="review-tab-ta"
                                   class="scroll-to avaliations-link"
                                   data-on="click"
                                   data-event-category="Página_de_hotel"
                                   data-event-action="Click_avaliacao"
                                   data-event-label="Ver_todas_tripadvisor">
                                    Ver todas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="
                        col-md-9

                     col-sm-12
                     col-xs-12
                     hotel-resume__box">
                    <p class="hotel-resume__box-description">

                        Quer viajar em grupo? o HU te leva!
                        Grupos a partir de 8 quartos podem solicitar cotações pelo email <a class="__cf_email__"
                                                                                            href="/cdn-cgi/l/email-protection"
                                                                                            data-cfemail="3c5b4e494c5354497c5453485950494e5e5d5253125f5351125e4e">[email&#160;protected]</a>
                        <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                            !function (t, e, r, n, c, a, p) {
                                try {
                                    t = document.currentScript || function () {
                                            for (t = document.getElementsByTagName('script'), e = t.length; e--;)if (t[e].getAttribute('data-cfhash'))return t[e]
                                        }();
                                    if (t && (c = t.previousSibling)) {
                                        p = t.parentNode;
                                        if (a = c.getAttribute('data-cfemail')) {
                                            for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2)e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                            p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                        }
                                        p.removeChild(t)
                                    }
                                } catch (u) {
                                }
                            }()
                            /* ]]> */</script>
                        O complexo possui ampla área de lazer com piscina, quadra de tênis, salão de jogos, pista de
                        boliche e muito mais. Política para menores: Menores...

                    </p>
                    <a href="#wrap-hotel-info"
                       data-scroll-to="#wrap-hotel-info"
                       class="seemore scroll-to"
                       data-on="click"
                       data-event-category="Página_de_hotel"
                       data-event-action="Click_descrição"
                       data-event-label="Mais_sobre_hotel">
                        Mais sobre o hotel
                    </a>
                </div>
            </div>

        </div>
    </section>


    <br>
    <br>
    <br>
    <br>
    <br>


    <style>

        #wrap-rooms p {
            color: #343434;
        }
    </style>
    <section id="wrap-availability" class="wrap-spacing" style="padding: 0 15%; height: 400px; position: relative;">
        <div class="calendar-box" style="float:left;width:50%;">

            <div class="row">
                <div class="col-xs-12 col-sm-12 availabilities">
                    <div class="availabilities-template">

                    </div>
                    <div class="no-package-searched" style="float: left;width: 100%;">

                        <h2 class="section-title" style="color: #2794e1; float: left;width: 100%;">Regulamento da Oferta
                            <span>&nbsp;Leia o Regulamento com Atenção</span>
                        </h2>


                    </div>
                </div>

                <div class="pull-right calendar-chosen-date calendar-info"></div>
            </div>
        </div>

        <form id="formAvailabilities" action="/hotels/checkout" method="POST">
            <section id="wrap-rooms" style="float: left;width: 60%;">

                <p style="font-weight: bold;">Com Usar:</p>
                <p >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica
                    e de impressos, e vem
                    sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os
                    embaralhou para fazer um livro de modelos de tipos.</p>

                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem
                    sendo utilizado desde o século XVI.</p>



            </section>

            <section id="wrap-rooms" style="float: right;width: 40%; margin-top: -10%;">


                <span style="position: absolute;right: 5%;">Veja Também</span>
                <br>
                <br>
                <?php
                include 'components/interna/oferta.php';
                ?>

            </section>


    </section>




</main>

<?php

include 'fixed_files/footer.php';
?>
