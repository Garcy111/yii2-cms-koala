<?php
namespace app\modules\blog\models;

use yii\db\ActiveRecord;
use Yii;

class Posts extends ActiveRecord {

	public static function tableName()
	{
		return 'posts';
	}
}