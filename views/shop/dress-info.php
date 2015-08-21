<?php
/**
 * Created by PhpStorm.
 * User: da
 * @model
 */


use yii\helpers\Url;

$this->title = 'Описание';
$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['catalog']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-7">
        <?php
        $widget = \kotchuprik\fotorama\Widget::begin([
            'version' => '4.5.2',
            'options' => [
                'nav' => 'thumbs',
            ],
            'htmlOptions' => [
                //   'class' => 'anotherCssClass',
              //  'data-ratio'=>"1.3333333333",
                'data-width'=>"100%",
                'data-ratio'=>"800/600",

            ],
        ]);

        $images = $model->getImages();
        foreach ($images as $img) {
            echo '<img src="' . Yii::getAlias('@web') . '/' . $img->getPathToOrigin() . '">';
        }
        $widget->end();
        ?>
    </div>
    <div class="col-md-5">
        <div class="alert alert-warning">
            <h1 itemprop="name">Шелковое платье K&K</h1>
            <h4>
                Тут красивое короткое описание товара!
            </h4>

            <div itemprop="offers" itemscope="" itemtype="">
                <h2 class="text-primary">
                    <span itemprop="price"><?=$model->price;?></span>
                    <span itemprop="priceCurrency" class="rubznak">p&nbsp;&nbsp;</span>
                </h2>
                <span style="text-decoration: line-through">4000 руб.</span></div>


            <div class="pull-right">
                <a id="toCart" data-loading-text="Загрузка..."
                   href="<?php echo Url::to(['shop/add-to-cart', 'id' => $model->id]); ?>" class="btn btn-success">В
                    корзину</a>
            </div>
            <p><br></p>

            <div>
                <div class="small"></div>
                <div class="small">В наличии: 5 шт.</div>

            </div>


        </div>
    </div>

</div>

<?php
/*
$this->registerJs("
        $('#toCart').click(function () {
            $.ajax({
                url: '". Url::toRoute(['shop/add-to-cart'])."',
                cache: false,
                type:'POST',
                data:{'id':'1'},
                beforeSend: function () {
                    $('#toCart').button('loading');
                },
                success: function (html) {
                    alert(html);
                    $('#toCart').button('reset');
                }
            });
        });
                ");
*/
?>


<div class="row">
    <div role="tabpanel" class="col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active hidden-xs"><a href="#home" aria-controls="home" role="tab"
                                                                data-toggle="tab"><span
                        class="glyphicon glyphicon-info-sign"></span> Описание</a></li>

            <li role="presentation" class="hidden-xs"><a href="#messages" id="commentLoad" data-uid="138"
                                                         aria-controls="messages" role="tab" data-toggle="tab"><span
                        class="glyphicon glyphicon-comment"></span> Отзывы</a></li>
        </ul>
        <p></p>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home" itemprop="description"><p>Платье выполнено из
                    приятного на ощупь материала. Детали: приталенный крой, потайная молния и эластичная резинка на
                    спинке, внутренние вставки для поддержки груди, силиконовая лента по верхнему внутреннему канту,
                    изящные оборки, пояс декорирован сверкающими кристаллами.</p></div>

            <div role="tabpanel" class="tab-pane hidden-xs" id="messages">

                <div id="commentList"></div>


                <button role="button" class="btn btn-info pull-right" onclick="$('#addComment').slideToggle();
                            $(this).hide();"><span class="glyphicon glyphicon-plus-sign"></span> Новый комментарий
                </button>

                <div id="addComment" class="well well-sm" style="display:none;margin-top:30px;">

                    <h3>Оставьте свой отзыв</h3>

                    <textarea id="message" class="form-control"></textarea>
                    <br>

                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success btn-sm">
                            <input type="radio" name="rate" value="1"> +1
                        </label>
                        <label class="btn btn-success btn-sm">
                            <input type="radio" name="rate" value="2"> +2
                        </label>
                        <label class="btn btn-success btn-sm">
                            <input type="radio" name="rate" value="3"> +3
                        </label>
                        <label class="btn btn-success btn-sm">
                            <input type="radio" name="rate" value="4"> +4
                        </label>
                        <label class="btn btn-success btn-sm active">
                            <input type="radio" name="rate" value="5" checked=""> +5
                        </label>
                        <button role="button" class="btn btn-info btn-sm pull-right"
                                onclick="commentList('138', 'add', 1);">Проголосовать
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>