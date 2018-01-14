<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orderdetails".
 *
 * @property int $IDOrderDetails รหัส
 * @property int $IDFood รหัสอาหาร
 * @property int $IDFoodDetails รหัสรายละเอียดอาหาร
 * @property int $AmountFood จำนวน
 *
 * @property Food $food
 * @property Fooddetails $foodDetails
 * @property Orders[] $orders
 */
class Orderdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orderdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDFood', 'IDFoodDetails', 'AmountFood'], 'required'],
            [['IDFood', 'IDFoodDetails', 'AmountFood'], 'integer'],
            [['IDFood'], 'unique'],
            [['IDFoodDetails'], 'unique'],
            [['IDFood'], 'exist', 'skipOnError' => true, 'targetClass' => Food::className(), 'targetAttribute' => ['IDFood' => 'IDFood']],
            [['IDFoodDetails'], 'exist', 'skipOnError' => true, 'targetClass' => Fooddetails::className(), 'targetAttribute' => ['IDFoodDetails' => 'IDFoodDetails']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDOrderDetails' => 'รหัส',
            'IDFood' => 'รหัสอาหาร',
            'IDFoodDetails' => 'รหัสรายละเอียดอาหาร',
            'AmountFood' => 'จำนวน',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFood()
    {
        return $this->hasOne(Food::className(), ['IDFood' => 'IDFood']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoodDetails()
    {
        return $this->hasOne(Fooddetails::className(), ['IDFoodDetails' => 'IDFoodDetails']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['IDOrderDetails' => 'IDOrderDetails']);
    }
}
