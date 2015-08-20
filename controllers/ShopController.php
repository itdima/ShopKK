<?php
namespace app\controllers;

use app\models\SearchForm;
use Yii;
use yii\web\Controller;

class ShopController extends Controller
{
    /*
     * Метод добавления товавра в корзину
     */
    public function actionAddToCart($id)
    {
        $cart = new ShoppingCart();

        $model = Products::findOne($id);
        if ($model) {
            $cart->put($model, 1);
            return $this->redirect(['index']);
        }
        throw new NotFoundHttpException();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function  actionDressInfo()
    {
        return $this->render('dress-info');
    }

    public function actionCatalog()
    {
        $model = new SearchForm();
        if ($model->load(Yii::$app->request->post())) {
            return $this->render('catalog', ['model' => $model,]);
        }

        return $this->render('catalog', ['model' => $model,]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }


}