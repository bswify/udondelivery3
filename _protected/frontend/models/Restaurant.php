<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

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
 * @property string $latlng ตำแหน่งจากgooglemap
 * @property string $LoginType ประเภท
 *
 * @property Food $food
 * @property Respromotion $respromotion
 * @property Resreview $resreview
 * @property Location $location
 * @property int IDUser
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
            [['ResName', 'ResAddress', 'ResStatus', 'ResLowPrice', 'ResTel', 'ResTimeStart', 'ResTimeEnd','ResImg', 'IDLocation', 'latlng', 'LoginType','IDUser'], 'required'],
            [['ResName', 'ResAddress', 'ResStatus', 'ResTel', 'latlng', 'LoginType'], 'string'],
            [['ResLowPrice', 'IDLocation','IDUser'], 'integer'],
            [['ResTimeStart', 'ResTimeEnd'], 'safe'],
//            [['IDLocation'], 'unique'],
//            [
//                ['ResImg'],'file',
//                'skipOnEmpty' => true,
//                'extensions' => 'png,jpg'
//            ],
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
//            'RUsername' => 'Username',
//            'Rpasswords' => 'password',
            'ResImg' => 'รูปภาพ',

            'latlng' => 'ตำแหน่งจากgooglemap',
            'LoginType' => 'ประเภท',
            'IDUser' => 'รหัสuser',
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
//    public function getLocation()
//    {
//        return $this->hasOne(Location::className(), ['IDLocation' => 'IDLocation']);
//    }
}
