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
if (isset($searchModel)) {
    //echo Html::encode($searchModel->priceMin);
}
?>

<div class="well">


    <?php $form = ActiveForm::begin([
        'id' => 'search-form',
        'options' => [
            'class' => 'form-inline'
        ]
    ]); ?>


    <?= $form->field($searchModel, 'priceMin', [
        'inputOptions' => [
            'placeholder' => 'Цена от',
            'class' => 'form-control input-sm'
        ],
        'enableLabel' => false,
    ]); ?>

    <?= $form->field($searchModel, 'priceMax', [
        'inputOptions' => [
            'placeholder' => 'Цена до',
            'class' => 'form-control input-sm'
        ],
        'enableLabel' => false,
    ]); ?>



    <?= Html::submitButton('Найти', ['id' => 'searchSubmitButton', 'class' => 'btn btn-primary btn-sm']) ?>
    <?php ActiveForm::end(); ?>

</div>

<?php
if (!isset($models)) {
    ?>
    <div class="row">
        <p>К сожалению, по вашему запросу ничего не найдено.</p>
    </div>
<?php

}
$i = 0;
if ($models) {
    foreach ($models as $model) {
        $i++;
        if ($i % 4 == 0) {
            echo '<div class="row">';
        }

        ?>

        <div class="col-md-3">
            <div class="thumbnail">
        <span class="sale-icon-content">
            <span class="sale-icon label">Распродажа</span>
        </span>

                <div class="caption">
                    <a class="highslide" href="#" title="Платье K&K">

                        <img src="<?= Yii::getAlias('@web') . '/' . $model->getImage()->getPathToOrigin(); ?>"
                             alt="Платье K&K">
                    </a>
                    <h5>
                        <a href="<?= Url::toRoute(['shop/dress-info', 'id' => $model->id]); ?>"
                           title="Прекрасное шелковое платье">Прекрасное шелковое платье</a>
                    </h5>
                    <h4>
                        <?= $model->price; ?> <span class="rubznak">p&nbsp;&nbsp;</span><sup
                            class="text-muted"><span
                                style="text-decoration: line-through">60000 руб.</span></sup>
                    </h4>
                </div>
                <div class="caption">
                    <a href="<?= Url::toRoute(['shop/dress-info', 'id' => $model->id]); ?>"
                       class="btn btn-primary btn-sm btn-block"
                       data-uid="138" role="button">
                        Подробнее...
                    </a>

                </div>
            </div>
        </div>
        <?php
        if ($i % 4 == 0) {
            echo '</div>';
        }


    }
}
?>

