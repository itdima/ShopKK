

<?php

/* @var $this \yii\web\View */

//$this->title = 'Index';
//$this->params['breadcrumbs'][] = $this->title;

?>


<div class="bar-padding-top-fix visible-md"></div>
<!-- Слайдер -->
<div class="template-slider">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?= Yii::getAlias('@web') . '/images/dress/main/1.jpg' ?>" alt="тест">
                <div class="carousel-caption">
                    <h1>Твое настроение</h1>
                </div>
            </div>
            <div class="item">
                <img src="<?= Yii::getAlias('@web') . '/images/dress/main/2.jpg' ?>" alt="тест">
                <div class="carousel-caption">
                    <h1>Твои эмоции</h1>
                </div>
            </div>
            <div class="item">
                <img src="<?= Yii::getAlias('@web') . '/images/dress/main/3.jpg' ?>" alt="тест">
                <div class="carousel-caption">
                    <h1>Твой стиль</h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>


    <div class="page-header visible-lg visible-md">
        <h1>Благодарим вас за выбор K&K!</h1>
    </div>
    <div>
        <p>
           Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п. Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п.
            Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п. Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п.
            Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п. Здесь текст, который описывает, какой прекрасный бренд и т.д. и т.п.
        </p>
    </div>

</div>