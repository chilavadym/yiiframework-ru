<?php

/* @var $this \yii\web\View */
use yii\helpers\Html;

/* @var $content string */
?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>

<div class="container-fluid promo">
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-5 col-md-5 col-lg-5">
                <img src="i/yii_user.png" class="promo-img">
            </div>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 promo-inf">
                <div class="promo-title">Русскоязычное сообщество Yii</div>
                <div class="promo-description">
                    Yii — это высокоэффективный основанный на компонентной структуре PHP-фреймворк для разработки
                    масштабных веб-приложений. Он позволяет максимально применить концепцию повторного использования
                    кода и может существенно ускорить процесс веб-разработки. Название Yii (произносится как Yee или
                    [ji:]) означает простой (easy), эффективный (efficient) и расширяемый (extensible).
                </div>
                <?= Html::a(
                    ' <svg width="32" height="32" viewBox="0 0 32 32" class="ico-github">
                        <path d="M29.856,7.912 C28.425,5.477 26.484,3.549 24.032,2.129 C21.580,0.708 18.903,-0.003 16.000,-0.003 C13.097,-0.003 10.419,0.708 7.967,2.129 C5.516,3.549 3.575,5.477 2.144,7.912 C0.713,10.347 -0.003,13.006 -0.003,15.888 C-0.003,19.351 1.015,22.465 3.050,25.231 C5.085,27.996 7.714,29.910 10.936,30.972 C11.312,31.041 11.589,30.993 11.770,30.828 C11.950,30.662 12.041,30.455 12.041,30.207 C12.041,30.166 12.037,29.793 12.030,29.090 C12.023,28.386 12.020,27.772 12.020,27.248 L11.540,27.331 C11.235,27.386 10.849,27.410 10.384,27.403 C9.919,27.397 9.436,27.348 8.936,27.258 C8.436,27.169 7.970,26.962 7.540,26.638 C7.109,26.314 6.804,25.890 6.623,25.366 L6.415,24.889 C6.276,24.572 6.057,24.220 5.759,23.834 C5.460,23.448 5.158,23.186 4.852,23.048 L4.706,22.945 C4.609,22.876 4.519,22.793 4.436,22.696 C4.352,22.600 4.290,22.503 4.248,22.406 C4.206,22.310 4.241,22.230 4.352,22.168 C4.463,22.106 4.665,22.075 4.957,22.075 L5.373,22.137 C5.651,22.193 5.995,22.358 6.405,22.634 C6.814,22.910 7.151,23.268 7.415,23.710 C7.735,24.275 8.120,24.706 8.571,25.003 C9.023,25.299 9.478,25.448 9.936,25.448 C10.394,25.448 10.790,25.413 11.124,25.344 C11.457,25.276 11.770,25.172 12.061,25.034 C12.186,24.110 12.527,23.399 13.082,22.903 C12.291,22.820 11.579,22.696 10.947,22.530 C10.315,22.365 9.662,22.096 8.988,21.723 C8.314,21.351 7.755,20.888 7.311,20.337 C6.866,19.785 6.501,19.061 6.217,18.164 C5.932,17.267 5.790,16.233 5.790,15.060 C5.790,13.391 6.339,11.970 7.436,10.798 C6.922,9.542 6.971,8.135 7.582,6.577 C7.985,6.452 8.582,6.546 9.374,6.856 C10.166,7.166 10.745,7.432 11.114,7.653 C11.482,7.873 11.777,8.060 11.999,8.211 C13.291,7.853 14.625,7.673 16.000,7.673 C17.375,7.673 18.709,7.853 20.001,8.211 L20.793,7.715 C21.334,7.384 21.974,7.080 22.709,6.804 C23.446,6.529 24.009,6.453 24.397,6.577 C25.023,8.136 25.078,9.543 24.564,10.798 C25.661,11.970 26.210,13.391 26.210,15.060 C26.210,16.233 26.068,17.271 25.783,18.174 C25.498,19.078 25.130,19.802 24.679,20.347 C24.227,20.892 23.665,21.351 22.991,21.723 C22.317,22.096 21.664,22.365 21.032,22.530 C20.400,22.696 19.688,22.820 18.897,22.903 C19.619,23.524 19.980,24.503 19.980,25.841 L19.980,30.207 C19.980,30.455 20.067,30.662 20.241,30.827 C20.414,30.992 20.688,31.041 21.064,30.972 C24.286,29.910 26.915,27.996 28.950,25.230 C30.985,22.464 32.003,19.351 32.003,15.887 C32.002,13.005 31.286,10.347 29.856,7.912 Z"/>
                    </svg>
                    <span class="btn-promo-title">' . \Yii::$app->params['yii2-tag-name'] . '</span>',
                    \Yii::$app->params['yii2-html-url'], ['class' => 'btn btn-success btn-lg pull-left btn-promo']
                ) ?>
                <div class="promo-or"><?= Html::a(
                        Yii::t('app', 'or {n} version', ['n' => \Yii::$app->params['yii1-tag-name']]),
                        \Yii::$app->params['yii1-html-url']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid yii-features">
    <div class="ico-f-close"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="f-title-big">Быстрый, безопасный и профессиональный PHP Framework</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="ico-fast"><img src="i/ico_f_fast.svg" alt=""></div>
                <div class="f-title fast">Быстрый</div>
                <div class="f-descr">
                    Yii запускает только то, что используется, имеет мощную систему кэширирования и изначально нацелен на
                    отличную работу с AJAX.
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="ico-secure"><img src="i/ico_f_secure.svg" alt=""></div>
                <div class="f-title secure">Безопасный</div>
                <div class="f-descr">
                    В Yii есть всё для обеспечения безопасности: валидация, фильтрация, защита от SQL-инъекций и XSS.
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="ico-professional"><img src="i/ico_f_professional.svg" alt=""></div>
                <div class="f-title professional">Профессиональный</div>
                <div class="f-descr">
                    Yii помогает писать чистый гибкий код. Фреймворк следует MVC и чётко отделяет логику от отображения.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid index-search">
    <div class="container">
        <input class="form-control input-lg" type="text" placeholder="<?= Yii::t('app', 'Search') ?>">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <?= $content ?>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4 i-twitter">
            <div class="tweet-section">Твиты</div>
            <a href="" class="ico-twitter-section">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.24 18.76">
                    <path
                        d="M25.911,8.321 C26.316,8.493 26.840,8.615 27.482,8.686 C27.777,8.712 28.061,8.722 28.343,8.722 C28.669,8.722 28.975,8.704 29.254,8.669 C28.902,8.997 28.450,9.283 27.904,9.526 C27.353,9.769 26.643,9.891 25.767,9.891 C25.365,11.389 24.623,12.735 23.536,13.918 C22.454,15.107 21.167,16.088 19.675,16.862 C18.183,17.635 16.544,18.174 14.749,18.479 C13.738,18.661 12.729,18.750 11.716,18.750 C10.950,18.750 10.183,18.696 9.419,18.586 C7.647,18.357 5.946,17.817 4.301,16.969 C2.655,16.125 1.219,14.916 -0.014,13.346 C0.683,13.965 1.494,14.447 2.420,14.781 C3.345,15.114 4.306,15.284 5.304,15.284 C6.303,15.284 7.284,15.100 8.248,14.743 C9.208,14.385 10.071,13.827 10.842,13.072 C10.695,13.094 10.550,13.108 10.400,13.108 C10.121,13.108 9.866,13.059 9.637,12.961 C9.270,12.816 9.017,12.617 8.880,12.368 C8.737,12.119 8.737,11.844 8.880,11.545 C9.017,11.246 9.373,10.983 9.946,10.752 C9.751,10.774 9.560,10.786 9.381,10.786 C9.098,10.786 8.837,10.762 8.598,10.717 C8.191,10.641 7.844,10.516 7.546,10.342 C7.242,10.162 6.999,9.971 6.803,9.764 C6.608,9.557 6.443,9.336 6.309,9.105 C6.555,8.886 6.826,8.719 7.132,8.606 C7.436,8.490 7.838,8.418 8.337,8.394 C7.219,8.152 6.420,7.788 5.945,7.317 C5.471,6.842 5.169,6.295 5.051,5.674 C5.381,5.622 5.708,5.566 6.045,5.500 C6.378,5.431 6.644,5.424 6.841,5.471 C5.888,4.996 5.226,4.442 4.847,3.808 C4.519,3.250 4.354,2.724 4.354,2.237 C4.354,2.176 4.360,2.110 4.374,2.036 C6.091,2.634 7.536,3.183 8.711,3.680 C9.888,4.181 10.932,4.668 11.845,5.144 C12.197,5.287 12.549,5.506 12.904,5.800 L14.056,6.789 C14.301,6.141 14.576,5.500 14.893,4.860 C15.214,4.219 15.551,3.607 15.909,3.023 C16.268,2.440 16.672,1.902 17.123,1.415 C17.573,0.929 18.087,0.530 18.656,0.210 C18.634,0.488 18.489,0.765 18.221,1.032 C18.551,0.754 18.905,0.529 19.287,0.354 C19.675,0.184 20.079,0.072 20.504,0.010 C20.454,0.290 20.256,0.520 19.899,0.695 C19.547,0.871 19.238,1.009 18.970,1.104 C19.065,1.082 19.260,1.017 19.544,0.916 C19.830,0.812 20.136,0.716 20.459,0.633 C20.784,0.547 21.073,0.489 21.338,0.469 C21.598,0.444 21.755,0.490 21.802,0.614 C21.874,0.760 21.832,0.885 21.675,0.988 C21.518,1.092 21.323,1.178 21.098,1.255 C20.876,1.327 20.646,1.386 20.425,1.437 C20.197,1.487 20.050,1.523 19.977,1.545 L19.301,1.782 C19.434,1.768 19.568,1.764 19.701,1.764 C20.261,1.764 20.811,1.848 21.346,2.019 C22.005,2.226 22.607,2.544 23.155,2.971 C23.701,3.394 24.185,3.895 24.597,4.469 C25.011,5.042 25.315,5.656 25.511,6.312 L25.585,6.606 C25.605,6.703 25.633,6.811 25.656,6.931 C25.900,7.008 26.191,7.052 26.535,7.071 C26.876,7.088 27.213,7.071 27.550,7.016 C27.882,6.962 28.186,6.892 28.459,6.807 C28.734,6.721 28.952,6.642 29.109,6.570 C28.916,7.046 28.541,7.444 27.985,7.766 C27.429,8.086 26.736,8.270 25.911,8.321 Z"/>
                </svg>
            </a>
            <a class="twitter-timeline" href="https://twitter.com/yiiframework_ru" data-widget-id="344811392374820865">Твиты
                от @khilkov</a>

            <?php $this->registerJs(
                '!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? "http" : "https";
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");'
            ); ?>

        </div>

    </div>
</div>
<?php $this->endContent() ?>
