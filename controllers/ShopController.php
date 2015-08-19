<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ShopController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCatalog()
    {
        return $this->render('catalog');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }


}