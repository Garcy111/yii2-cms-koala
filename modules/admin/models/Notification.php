<?php
namespace app\modules\admin\models;

use yii\db\ActiveRecord;

class Notification extends ActiveRecord {

	public static function tableName()
	{
		return "{{%notification}}";
	}

	public function rules() {
		return [
			[['name', 'link', 'date'], 'safe'],
		];
	}
}