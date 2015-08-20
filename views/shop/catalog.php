<?php
/**
 * Created by PhpStorm.
 * User: DA
 * @var $this yii\web\View
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
if (isset($model)) {
    //echo Html::encode($model->priceMin);
}
?>

    <div class="well">


        <?php $form = ActiveForm::begin([
            'id' => 'search-form',
            'options' => [
                'class' => 'form-inline'
            ]
        ]); ?>


        <?= $form->field($model, 'priceMin', [
            'inputOptions' => [
                'placeholder' => 'Цена от',
                'class' => 'form-control input-sm'
            ],
            'enableLabel' => false,
        ]); ?>

        <?= $form->field($model, 'priceMax', [
            'inputOptions' => [
                'placeholder' => 'Цена до',
                'class' => 'form-control input-sm'
            ],
            'enableLabel' => false,
        ]); ?>



        <?= Html::submitButton('Найти', ['id' => 'searchSubmitButton', 'class' => 'btn btn-primary btn-sm']) ?>
        <?php ActiveForm::end(); ?>

    </div>


    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
        <span class="sale-icon-content">
            <span class="sale-icon label">Распродажа</span>

        </span>

                <div class="caption">
                    <a class="highslide" href="<?= Yii::getAlias('@web') . '/images/1.jpg' ?>" title="Платье K&K"><img
                            src="<?= Yii::getAlias('@web') . '/images/1.jpg' ?>" alt="Платье K&K"></a>
                    <h5>
                        <a href="<?=Url::toRoute(['shop/dress-info']);?>"
                           title="Прекрасное шелковое платье">Прекрасное шелковое платье</a>
                    </h5>
                    <h4>
                        38475 <span class="rubznak">p&nbsp;&nbsp;</span><sup class="text-muted"><span
                                style="text-decoration: line-through">60000 руб.</span></sup>
                    </h4>
                </div>
                <div class="caption">
                    <button class="btn btn-primary btn-sm btn-block" data-uid="138" role="button">
                        В корзину
                    </button>
                    <button class="btn btn-default btn-sm btn-block" role="button" data-uid="138">
                        Отложить
                    </button>
                </div>
            </div>
        </div>


    </div>



