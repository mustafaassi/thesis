<?php

use dosamigos\gallery\Gallery;
use yii\bootstrap\Carousel;
use yii\web\View;
\app\assets\HomeAsset::register($this);

/* @var $this View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <!--<h1>Thesis Home Page</h1>-->
    </div>
    <div class="body-content">



<!--    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>-->

        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:700px;margin:0px auto 6px;">
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="<?= Yii::getAlias('@web'); ?>/mySliderImages/images/7db948c1c358e9b02a54882bdba122d4.png" alt="Temperature"  title="Temperature" />
                    </li>
                    <li><img src="<?= Yii::getAlias('@web'); ?>/mySliderImages/images/icon-humidity-body-effects.png" alt="humidity"  title="humidity" />
                    </li>
                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="<?= Yii::getAlias('@web'); ?>/mySliderImages/images/7db948c1c358e9b02a54882bdba122d4-tn.png" alt="Temperature" title="Temperature" /></li>
                    <li><img src="<?= Yii::getAlias('@web'); ?>/mySliderImages/images/icon-humidity-body-effects-tn.png" alt="humidity" title="humidity" /></li>
                </ul>
                <!--<div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Slider">Responsive jQuery Slider</a></div>-->
            </div>
        </div>

    </div>
</div>
