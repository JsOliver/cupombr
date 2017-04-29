<?php

include 'fixed_files/header.php';
?>
    <div class="page index-page" data-reactid=".xgwtq0esjk.3">
        <noscript data-reactid=".xgwtq0esjk.3.0"></noscript>
        <div id="hu-promocoes-banner_wide-id" data-reactid=".xgwtq0esjk.3.1"></div>
        <div class="template template--home" data-reactid=".xgwtq0esjk.3.2">
            <div style="background: #dfdfdf;" class="template__sections" data-reactid=".xgwtq0esjk.3.2.0">

                <div class="">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <?php
                            for ($i = 0; $i < 3; $i++):

                                if ($i == 0):
                                    $active = 'active';
                                else:
                                    $active = '';

                                endif;
                                ?>
                                <div class="item item1 <?php echo $active;?>">
                                    <div class="fill" style=" background-color:#48c3af;">
                                        <div class="inner-content">
                                            <div class="carousel-img">
                                                <img
                                                    style="height:400px;width: 100%; object-fit: cover; object-position: center;"
                                                    src="https://thumbcdn-z.hotelurbano.net/-es_Pe8wNHE_UjlWT4R67WLhXvY=/1920x440/https://especiais.s3.amazonaws.com/images/e2b8a614-93e0-4c08-8639-a1b16fdd857d.png"
                                                    alt="sofa" class="img img-responsive"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <?php endfor; ?>

                        </div>
                    </div>
                </div>

                <?php
                $title = 'SUPER DESTAQUE';

                include 'components/destaque.php';

                ?>

            </div>

            <?php
            $title = 'Itens 1';

            include 'components/itens.php';

            $title = 'Itens 2';
            include 'components/itens.php';
            ?>
        </div>
    </div>

<?php
include 'fixed_files/footer.php';
?>