<?php
namespace app\modules\shop\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {

	public static function tableName()
	{
		return '{{%products}}';
	}

	 // /**
  //    * @return \yii\db\ActiveQuery
  //    */
  //   public function getCategory()
  //   {
  //       return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
  //   }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::className(), ['product_id' => 'id']);
    }

    public static function find()
    {
        return new \app\modules\admin\models\query\ProductQuery(get_called_class());
    }
}