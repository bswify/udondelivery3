<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "delivery".
 *
 * @property int $IDDelivery รหัส
 * @property int $DeliveryPrice ค่าจัดส่ง
 * @property int $IDDeliveryTime รหัสเวลาจัดส่ง
 * @property int $IDDeliveryPro รหัสโปรโมชั่นการจัดส่ง
 *
 * @property Deliverypro $deliveryPro
 * @property Deliverytime $deliveryTime
 * @property Orders[] $orders
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'delivery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DeliveryPrice', 'IDDeliveryTime', 'IDDeliveryPro'], 'required'],
            [['DeliveryPrice', 'IDDeliveryTime', 'IDDeliveryPro'], 'integer'],
            [['IDDeliveryPro'], 'unique'],
            [['IDDeliveryTime'], 'unique'],
            [['IDDeliveryPro'], 'exist', 'skipOnError' => true, 'targetClass' => Deliverypro::className(), 'targetAttribute' => ['IDDeliveryPro' => 'IDDeliveryPro']],
            [['IDDeliveryTime'], 'exist', 'skipOnError' => true, 'targetClass' => Deliverytime::className(), 'targetAttribute' => ['IDDeliveryTime' => 'IDDeliveryTime']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDDelivery' => 'รหัส',
            'DeliveryPrice' => 'ค่าจัดส่ง',
            'IDDeliveryTime' => 'รหัสเวลาจัดส่ง',
            'IDDeliveryPro' => 'รหัสโปรโมชั่นการจัดส่ง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryPro()
    {
        return $this->hasOne(Deliverypro::className(), ['IDDeliveryPro' => 'IDDeliveryPro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryTime()
    {
        return $this->hasOne(Deliverytime::className(), ['IDDeliveryTime' => 'IDDeliveryTime']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['IDDelivery' => 'IDDelivery']);
    }
}
