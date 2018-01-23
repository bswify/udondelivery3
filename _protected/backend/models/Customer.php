<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $IDCustomer รหัส
 * @property string $CustomerFName ชื่อ
 * @property string $CustomerLName นามสกุล
 * @property string $CustomerImage รูปภาพ
 * @property int $CustomerPoint แต้มสะสม
 * @property string $CustomerPhone เบอร์โทร
 * @property string $CUsername Username
 * @property string $CPasswords Password
 * @property string $LoginType ประเภท
 *
 * @property Customeraddress $customeraddress
 * @property Favoritemenu $favoritemenu
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerFName', 'CustomerLName', 'CustomerImage', 'CustomerPoint', 'CustomerPhone', 'CUsername', 'CPasswords', 'LoginType'], 'required'],
            [['CustomerImage', 'CUsername', 'CPasswords', 'LoginType'], 'string'],
            [['CustomerPoint'], 'integer'],
            [['CustomerFName', 'CustomerLName'], 'string', 'max' => 255],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDCustomer' => 'รหัส',
            'CustomerFName' => 'ชื่อ',
            'CustomerLName' => 'นามสกุล',
            'CustomerImage' => 'รูปภาพ',
            'CustomerPoint' => 'แต้มสะสม',
            'CustomerPhone' => 'เบอร์โทร',
            'CUsername' => 'Username',
            'CPasswords' => 'Password',
            'LoginType' => 'ประเภท',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomeraddress()
    {
        return $this->hasOne(Customeraddress::className(), ['IDCustomer' => 'IDCustomer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritemenu()
    {
        return $this->hasOne(Favoritemenu::className(), ['IDCustomer' => 'IDCustomer']);
    }
}
