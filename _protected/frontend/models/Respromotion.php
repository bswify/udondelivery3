<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "respromotion".
 *
 * @property int $IDResPromotion รหัส
 * @property string $ResPromotionName ชื่อโปรโมชั่น
 * @property int $ResPromotionPrice ราคาส่วนลด
 * @property string $ResPromotionStart วันที่เริ่ม
 * @property string $ResPromotionEnd วันที่สิ้นสุด
 * @property int $IDRestaurant รหัสร้านอาหาร
 *
 * @property Restaurant $restaurant
 */
class Respromotion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'respromotion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ResPromotionName', 'ResPromotionPrice', 'ResPromotionStart', 'ResPromotionEnd', 'IDRestaurant'], 'required'],
            [['ResPromotionName'], 'string'],
            [['ResPromotionPrice', 'IDRestaurant'], 'integer'],
            [['ResPromotionStart', 'ResPromotionEnd'], 'safe'],
            [['IDRestaurant'], 'unique'],
            [['IDRestaurant'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['IDRestaurant' => 'IDRestaurant']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDResPromotion' => 'รหัส',
            'ResPromotionName' => 'ชื่อโปรโมชั่น',
            'ResPromotionPrice' => 'ราคาส่วนลด',
            'ResPromotionStart' => 'วันที่เริ่ม',
            'ResPromotionEnd' => 'วันที่สิ้นสุด',
            'IDRestaurant' => 'รหัสร้านอาหาร',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurant()
    {
        return $this->hasOne(Restaurant::className(), ['IDRestaurant' => 'IDRestaurant']);
    }
}
