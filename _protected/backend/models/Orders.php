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
 * @property int $IDCustomer รหัสลูกค้า
 * @property int $IDEmp รหัสพนักงาน
 *
 * @property Delivery $delivery
 * @property Orderdetails $orderDetails
 * @property Payment $paymant
 * @property Customer $customer
 * @property Employee $emp
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
            [['OrderDate', 'OrderNote', 'OrderTotalPrice', 'OrderStatus', 'IDOrderDetails', 'IDPaymant', 'IDDelivery', 'IDCustomer', 'IDEmp'], 'required'],
            [['OrderDate'], 'safe'],
            [['OrderNote', 'OrderStatus'], 'string'],
            [['OrderTotalPrice', 'IDOrderDetails', 'IDPaymant', 'IDDelivery', 'IDCustomer', 'IDEmp'], 'integer'],
            [['IDOrderDetails', 'IDPaymant', 'IDDelivery'], 'unique', 'targetAttribute' => ['IDOrderDetails', 'IDPaymant', 'IDDelivery']],
            // [['IDCustomer'], 'unique'],
            // [['IDEmp'], 'unique'],
            [['IDDelivery'], 'exist', 'skipOnError' => true, 'targetClass' => Delivery::className(), 'targetAttribute' => ['IDDelivery' => 'IDDelivery']],
            [['IDOrderDetails'], 'exist', 'skipOnError' => true, 'targetClass' => Orderdetails::className(), 'targetAttribute' => ['IDOrderDetails' => 'IDOrderDetails']],
            [['IDPaymant'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['IDPaymant' => 'IDPaymant']],
            [['IDCustomer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['IDCustomer' => 'IDCustomer']],
            [['IDEmp'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['IDEmp' => 'IDEmp']],
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
            'IDCustomer' => 'รหัสลูกค้า',
            'IDEmp' => 'รหัสพนักงาน',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['IDCustomer' => 'IDCustomer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['IDEmp' => 'IDEmp']);
    }
}
