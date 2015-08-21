<?php

namespace app\models;

use Yii;
use yz\shoppingcart\CartPositionInterface;
use yz\shoppingcart\CartPositionTrait;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property integer $category
 * @property double $price
 * @property integer $price_opt
 * @property integer $price_catalog
 * @property string $description
 * @property integer $size
 * @property integer $color
 * @property string $img_dir_path
 * @property string $img_main_name
 * @property string $article
 * @property string $material
 *
 * @property Images[] $images
 * @property Category $category0
 */
class Products extends \yii\db\ActiveRecord implements CartPositionInterface
{
    use CartPositionTrait;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function createModels(){
        $this->price = 1000;
        $this->save();

        $this->attachImage(Yii::getAlias('@webroot') . '/images/dress/4/1.jpg');
        $this->attachImage(Yii::getAlias('@webroot') . '/images/dress/4/2.jpg');
        $this->attachImage(Yii::getAlias('@webroot') . '/images/dress/4/3.jpg');
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * Метод getPrice() - переопределение для корзины
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Метод getId() - переопределение для корзины
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'price_opt', 'price_catalog', 'size', 'color'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string', 'max' => 500],
            [['img_dir_path', 'material'], 'string', 'max' => 100],
            [['img_main_name', 'article'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'price' => 'Price',
            'price_opt' => 'Price Opt',
            'price_catalog' => 'Price Catalog',
            'description' => 'Description',
            'size' => 'Size',
            'color' => 'Color',
            'img_dir_path' => 'Img Dir Path',
            'img_main_name' => 'Img Main Name',
            'article' => 'Article',
            'material' => 'Material',
        ];
    }


}
