<?php
namespace app\modules\admin\models;

use yii\db\ActiveRecord;
use Yii;

class PostCategory extends ActiveRecord {

	public static function tableName()
	{
		return 'post_category';
	}

	public function rules()
	{
		return [
			['name', 'required', 'message' => ''],
			['name', 'string', 'max' => 100, 'message' => ''],
		];
	}

	// public function getParent()
	// {
	// 	return $this->hasOne(PostCategory::className(), ['id' => 'parent_id']);
	// }
}