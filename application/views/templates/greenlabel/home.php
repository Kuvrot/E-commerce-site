<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (count($sliderProducts) > 0) {
    ?>
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            while ($i < count($sliderProducts)) {
                ?>
                <li data-target="#home-slider" data-slide-to="0" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                <?php
                $i++;
            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 0;
            foreach ($sliderProducts as $article) {
                ?>
                <div class="item <?= $i == 0 ? 'active' : '' ?>" style="background-image: url('<?= base_url('attachments/shop_images/' . $article['image']) ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>
                                    <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                        <?= character_limiter($article['title'], 100) ?>
                                    </a>
                                </h3>
                                <div class="description">
                                    <?= character_limiter(strip_tags($article['basic_description']), 150) ?>
                                </div>
                                <?php if ($hideBuyButtonsOfOutOfStock == 0 || (int)$article['quantity'] > 0) { ?>
                                <a class="option add-to-cart" data-goto="<?= LANG_URL . '/checkout' ?>" href="javascript:void(0);" data-id="<?= $article['id'] ?>">
                                    <?= lang('buy_now') ?>
                                </a>
                                <?php } ?>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
        <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#home-slider" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<?php } ?>
<div id="bannerCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#bannerCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" align="center" style="margin-top:10%; margin-bottom:10%;"> 
        <div class="item active">
            <a href="#"><img src="<?= base_url('attachments/banners/Ima1.png') ?>" alt="Banner 1" /></a>
        </div>
        <div class="item">
            <a href="#"><img src="<?= base_url('attachments/banners/Ima2.png') ?>" alt="Banner 2" /></a>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#bannerCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#bannerCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>

    <div>

</div>
