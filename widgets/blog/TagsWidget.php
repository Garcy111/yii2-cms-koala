<?php

namespace app\widgets\blog;

use app\modules\blog\models\Tags;
use Yii;
use yii\base\Widget;

class TagsWidget extends Widget {

	public function run() {
		$tags = Tags::find()->all();
		return $this->render('tags', ['tags' => $tags]);
	}
}

?>