<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\ShopAsset;

ShopAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body role="document" id="body">
    <?php $this->beginBody() ?>



    <!-- Header -->
    <header class="container">
        <div class="row">
            <div id="logo" class="col-md-3 text-center">
                <img src="<?= Yii::getAlias('@web') . '/images/your_logo.png' ?>" alt="K & K logo">
            </div>

            <div class="col-md-9">
                <ul class="nav nav-pills pull-right">
                    <li>
                        <a class="topMenu" href="#" data-toggle="modal" data-target="#userModal">
                            <span class="glyphicon glyphicon-user"></span>
                            Войти в кабинет
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="topMenu" href="#">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            Регистрация
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="topMenu" href="#" data-toggle="modal" data-target="#userModal">
                            <span class="glyphicon glyphicon-bookmark"></span>
                            Отложенные товары (<span class="wishlistcount">0</span>)
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="topMenu" href="#">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            Сравнить (<span id="numcompare">0</span>)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Панель меню (navbar) -->
    <nav class="navbar navbar-default" role="navigation" id="navigation">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand visible-xs" href="tel:(495)111-22-33">
                    <span class="glyphicon glyphicon-phone"></span> (495)111-22-33
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active visible-lg visible-md">
                        <a href="/" title="Домой"><span class="glyphicon glyphicon-home"></span></a>
                    </li>
                    <li class="">
                        <a href="<?= Url::toRoute(['shop/catalog']); ?>">Каталог</a>
                    </li>
                    <li class="">
                        <a href="/">Акции и распродажи</a>
                    </li>
                    <li class="">
                        <a href="/">Оплата и доставка</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Партнерам <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li><a tabindex="-1" href="#" target="_blank">Электроные каталоги</a></li>
                            <li role="presentation" class="divider"></li>
                            <li><a tabindex="-1" href="#" target="_blank">Оптовым покупателям</a></li>
                        </ul>
                    </li>


                    <li class="">
                        <a href="<?= Url::toRoute(['shop/about']); ?>">О нас</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right visible-lg visible-md">

                    <li>
                        <a id="cartlink" data-trigger="click" data-container="body" data-toggle="popover"
                           data-placement="bottom" data-html="true" data-url="/order/"
                           data-content="Здесь будут заказанные товары"
                           data-original-title="" title="">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        <span class="visible-lg-inline">товаров
                            <span id="num" class="label label-info"><?= \Yii::$app->cart->getCount(); ?></span> на
                        </span><span id="sum" class="label label-info"><?= \Yii::$app->cart->getCost(); ?></span>
                            <span class="rubznak">p&nbsp;&nbsp;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">


            <!-- левое меню -->
            <div class="col-md-3 sidebar col-xs-3">
                <div class="list-group">
                    <li class="list-group-item active">
                        <h4 class="list-group-item-heading">Платья</h4>
                    </li>
                    <a href="#" class="list-group-item">Длинные</a>
                    <a href="#" class="list-group-item">Короткие</a>
                    <a href="#" class="list-group-item">Коктейльные</a>
                    <a href="#" class="list-group-item">Вечерние</a>
                </div>
                <div class="list-group">
                    <li class="list-group-item active">
                        <h4 class="list-group-item-heading">Аксессуары</h4>
                    </li>
                    <a href="#" class="list-group-item">Бижутерия</a>
                    <a href="#" class="list-group-item">Сумки</a>
                    <a href="#" class="list-group-item">Шарфы</a>
                    <a href="#" class="list-group-item">Ремни</a>
                </div>
            </div>

            <div class="col-md-9 col-xs-12 main">


                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'homeLink' => [
                        'label' => 'Главная',
                        'url' => Yii::getAlias('@web')
                    ]
                ]) ?>
                <?= $content ?>

            </div>
        </div>
    </div>

    <footer class="footer" id="footer">
        <div class="container text-center">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div id="socseti" class="btn-group btn-group-sm ">
                        <div class="btn btn-default" rel="tooltip" title="Twitter" data-toggle="tooltip"
                             data-placement="top">
                            <a class="footer-a" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div title="ВКонтакте" rel="tooltip" data-toggle="tooltip" data-placement="top"
                             class="btn btn-default">
                            <a class="footer-a" href="http://vk.com/club43004231"><i class="fa fa-vk"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>&copy; K&K Company <?= date('Y') ?></p>
            </div>


        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>