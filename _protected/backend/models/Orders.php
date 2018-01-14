<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $IDOrder รหัส
 * @property string $OrderDate วันที่
 * @property string $OrderNote หมายเหตุ
 * @property int $OrderTotalPrice ราคารวม
 * @property string $OrderStatus สถานะการสั่งซื้อ
 * @property int $IDOrderDetails รหัสรายละเอียดการสั่งซื้อ
 * @property int $IDPaymant รหัสประเภทการชำระเงิน
 * @property int $IDDelivery รหัสการจัดส่ง
 *
 * @property Delivery $delivery
 * @property Orderdetails $orderDetails
 * @property Payment $paymant
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderDate', 'OrderNote', 'OrderTotalPrice', 'OrderStatus', 'IDOrderDetails', 'IDPaymant', 'IDDelivery'], 'required'],
            [['OrderDate'], 'safe'],
            [['OrderNote', 'OrderStatus'], 'string'],
            [['OrderTotalPrice', 'IDOrderDetails', 'IDPaymant', 'IDDelivery'], 'integer'],
            [['IDOrderDetails', 'IDPaymant', 'IDDelivery'], 'unique', 'targetAttribute' => ['IDOrderDetails', 'IDPaymant', 'IDDelivery']],
            [['IDDelivery'], 'exist', 'skipOnError' => true, 'targetClass' => Delivery::className(), 'targetAttribute' => ['IDDelivery' => 'IDDelivery']],
            [['IDOrderDetails'], 'exist', 'skipOnError' => true, 'targetClass' => Orderdetails::className(), 'targetAttribute' => ['IDOrderDetails' => 'IDOrderDetails']],
            [['IDPaymant'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['IDPaymant' => 'IDPaymant']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDOrder' => 'รหัส',
            'OrderDate' => 'วันที่',
            'OrderNote' => 'หมายเหตุ',
            'OrderTotalPrice' => 'ราคารวม',
            'OrderStatus' => 'สถานะการสั่งซื้อ',
            'IDOrderDetails' => 'รหัสรายละเอียดการสั่งซื้อ',
            'IDPaymant' => 'รหัสประเภทการชำระเงิน',
            'IDDelivery' => 'รหัสการจัดส่ง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDelivery()
    {
        return $this->hasOne(Delivery::className(), ['IDDelivery' => 'IDDelivery']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasOne(Orderdetails::className(), ['IDOrderDetails' => 'IDOrderDetails']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymant()
    {
        return $this->hasOne(Payment::className(), ['IDPaymant' => 'IDPaymant']);
    }
}
