<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "restaurant".
 *
 * @property int $IDRestaurant รหัส
 * @property string $ResName ชื่อร้านอาหาร
 * @property string $ResAddress ที่อยู่ร้านอาหาร
 * @property string $ResStatus สถานะ
 * @property int $ResLowPrice ราคาสั่งซื้อขั้นต่ำ
 * @property string $ResTel เบอร์โทร
 * @property string $ResTimeStart เวลาเปิด
 * @property string $ResTimeEnd เวลาปิด
 * @property int $IDLocation รหัสตำแหน่ง
 * @property string $RUsername Username
 * @property string $Rpasswords password
 * @property string $ResImg รูปภาพ
 * @property string $ResLat ละติจูด
 * @property string $ResLong ลองจิจูด
 * @property string $LoginType ประเภท
 *
 * @property Food $food
 * @property Respromotion $respromotion
 * @property Resreview $resreview
 * @property Location $location
 */
class Restaurant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'restaurant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ResName', 'ResAddress', 'ResStatus', 'ResLowPrice', 'ResTel', 'ResTimeStart', 'ResTimeEnd', 'IDLocation', 'RUsername', 'Rpasswords', 'ResImg', 'ResLat', 'ResLong', 'LoginType'], 'required'],
            [['ResName', 'ResAddress', 'ResStatus', 'ResTel', 'RUsername', 'Rpasswords', 'ResImg', 'ResLat', 'ResLong', 'LoginType'], 'string'],
            [['ResLowPrice', 'IDLocation'], 'integer'],
            [['ResTimeStart', 'ResTimeEnd'], 'safe'],
            [['IDLocation'], 'unique'],
            [['IDLocation'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['IDLocation' => 'IDLocation']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDRestaurant' => 'รหัส',
            'ResName' => 'ชื่อร้านอาหาร',
            'ResAddress' => 'ที่อยู่ร้านอาหาร',
            'ResStatus' => 'สถานะ',
            'ResLowPrice' => 'ราคาสั่งซื้อขั้นต่ำ',
            'ResTel' => 'เบอร์โทร',
            'ResTimeStart' => 'เวลาเปิด',
            'ResTimeEnd' => 'เวลาปิด',
            'IDLocation' => 'รหัสตำแหน่ง',
            'RUsername' => 'Username',
            'Rpasswords' => 'password',
            'ResImg' => 'รูปภาพ',
            'ResLat' => 'ละติจูด',
            'ResLong' => 'ลองจิจูด',
            'LoginType' => 'ประเภท',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFood()
    {
        return $this->hasOne(Food::className(), ['IDRestaurant' => 'IDRestaurant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespromotion()
    {
        return $this->hasOne(Respromotion::className(), ['IDRestaurant' => 'IDRestaurant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResreview()
    {
        return $this->hasOne(Resreview::className(), ['IDRestaurant' => 'IDRestaurant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['IDLocation' => 'IDLocation']);
    }
}
