<?php

namespace backend\models;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
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
            [['ResReviewDate', 'ResReviewScore', 'ResComment', 'IDRestaurant', 'IDCustomer'], 'required'],
            [['ResReviewDate'], 'safe'],
            [['ResReviewScore', 'IDRestaurant', 'IDCustomer'], 'integer'],
            [['ResComment'], 'string'],
            // [['IDRestaurant'], 'unique'],
            // [['IDCustomer'], 'unique'],
            //เพิ่มรูปหลายๆรูป
            [['ResReviewImage'], 'file',
              'skipOnEmpty' => true,
              'maxFiles' => 4,
              'extensions' => 'png,jpg'
            ],
            [['IDRestaurant'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['IDRestaurant' => 'IDRestaurant']],
            [['IDCustomer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['IDCustomer' => 'IDCustomer']],
        ];
    }

    //เพิ่มรูปภาพหลายๆรูป
    public function upload($model,$attribute)
    {
      $photos  = UploadedFile::getInstances($model, $attribute);
      $path = 'C:/xampp/htdocs/udondelivery3/uploads/images/Resreview/';
      if ($this->validate() && $photos !== null) {
          $filenames = [];
          foreach ($photos as $file) {
                  //$filename = md5($file->baseName.time()) . '.' . $file->extension;
                  $fileName = $file->baseName . '.' . $file->extension;
                  if($file->saveAs($path .'/'. $filename)){
                    $filenames[] = $filename;
                  }
          }
          if($model->isNewRecord){
            return implode(',', $filenames);
          }else{
            return implode(',',(ArrayHelper::merge($filenames,$model->getOwnPhotosToArray())));
          }
      }

      return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    // public function getUploadUrl(){
    //     return Yii::getAlias('@web').'/'.$this->upload_foler.'/';
    //   }

    // public function getPhotosViewer(){
    //   $photos = $this->photos ? @explode(',',$this->photos) : [];
    //   $img = '';
    //   foreach ($photos as  $photo) {
    //     $img.= ' '.Html::img($this->getUploadUrl().$photo,['class'=>'img-thumbnail','style'=>'max-width:100px;']);
    //   }
    //   return $img;
    // }

    public function getOwnPhotosToArray()
    {
      return $this->getOldAttribute('ResReviewImage') ? @explode(',',$this->getOldAttribute('ResReviewImage')) : [];
    }
    //จบเพิ่มรูปภาพหลายๆรูป
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
            'IDRestaurant' => 'ชื่อร้านอาหาร',
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
