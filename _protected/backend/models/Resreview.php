<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "resreview".
 *
 * @property int $IDResReview รหัส
 * @property string $ResReviewDate วันที่
 * @property int $ResReviewScore คะแนน
 * @property string $ResComment ความคิดเห็น
 * @property string $ResReviewImage รูปภาพ
 * @property int $IDRestaurant รหัสร้านอาหาร
 * @property int $IDCustomer ชื่อลูกค้า
 *
 * @property Restaurant $restaurant
 * @property Customer $customer
 */
class Resreview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resreview';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ResReviewDate', 'ResReviewScore', 'ResComment', 'ResReviewImage', 'IDRestaurant', 'IDCustomer'], 'required'],
            [['ResReviewDate'], 'safe'],
            [['ResReviewScore', 'IDRestaurant', 'IDCustomer'], 'integer'],
            [['ResComment', 'ResReviewImage'], 'string'],
            // [['IDRestaurant'], 'unique'],
            // [['IDCustomer'], 'unique'],
            [['IDRestaurant'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['IDRestaurant' => 'IDRestaurant']],
            [['IDCustomer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['IDCustomer' => 'IDCustomer']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDResReview' => 'รหัส',
            'ResReviewDate' => 'วันที่',
            'ResReviewScore' => 'คะแนน',
            'ResComment' => 'ความคิดเห็น',
            'ResReviewImage' => 'รูปภาพ',
            'IDRestaurant' => 'รหัสร้านอาหาร',
            'IDCustomer' => 'ชื่อลูกค้า',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurant()
    {
        return $this->hasOne(Restaurant::className(), ['IDRestaurant' => 'IDRestaurant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['IDCustomer' => 'IDCustomer']);
    }
}
