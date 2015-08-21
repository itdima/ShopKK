<?php
/**
 * Created by PhpStorm.
 * User: DA
 */


namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SearchForm - модель для поиска товара по атрибутам.
 */
class SearchForm extends Model
{
    public $priceMin;
    public $priceMax;
    public $size;
    public $vid;

    /**
     * @return массив валидированных данных
     */
    public function rules()
    {
        return [
            [['priceMin','priceMax','size'], 'number'],
            [['priceMin'], 'default', 'value' => 1],
            [['priceMax'], 'default', 'value' => 10000],

        ];
    }

    /**
     * @return массив пользовательских названий атрибутов
     */
    public function attributeLabels()
    {
        return [
            'size' => 'Размер',
            'priceMin' => 'Цена от',
            'priceMax' => 'Цена до',


        ];
    }
}