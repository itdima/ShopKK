<?php
namespace app\controllers;

use app\models\Products;
use app\models\SearchForm;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use \yz\shoppingcart\ShoppingCart;

class ShopController extends Controller
{

    /*
     * Временный метод создания моделей
     */
    public function actionCreateModels()
    {
        //$pr = new Products();
        //$pr->createModels();
    }

    /*
     * Метод добавления товавра в корзину
     */
    public function actionAddToCart($id)
    {
        $model = Products::findOne($id);
        if ($model) {
            \Yii::$app->cart->put($model, 1);
            return $this->redirect(['dress-info', 'id' => $model->id]);
        }
        throw new NotFoundHttpException();


    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function  actionDressInfo($id)
    {
        $model = Products::findOne($id);
        if ($model) {
            return $this->render('dress-info', ['model' => $model]);
        }
        throw new NotFoundHttpException();
    }

    public function actionCatalog()
    {
        $priceMin = 0;
        $priceMax = 1000000;
        $searchModel = new SearchForm();
        if (Yii::$app->request->isPost) {
            $searchModel->load(Yii::$app->request->post());
        }

        if (isset($searchModel->priceMin)) {
            $priceMin = $searchModel->priceMin;
        }
        if (isset($searchModel->priceMax)) {
            $priceMax = $searchModel->priceMax;
        }


        $models = Products::find()
            ->andWhere('price>=:priceMin', [':priceMin' => $priceMin])
            ->andWhere('price<=:priceMax', [':priceMax' => $priceMax])
            ->all();

        if ($searchModel) {
            return $this->render('catalog', ['searchModel' => $searchModel, 'models' => $models]);
        }

    }

    public function actionAbout()
    {
        return $this->render('about');
    }


}