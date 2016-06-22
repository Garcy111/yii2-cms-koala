<?php
namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\Notification;

class NotificationController extends Controller {

	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$model = new Notification();
		$active = $model->find()->asArray()->where(['active' => 1])->orderBy('id DESC')->all();
		$noActive = $model
			->find()
			->asArray()
			->where(['active' => 0])
			->limit(3)
			->orderBy('id DESC')
			->all();
		$data['active'] = $active;
		$data['noActive'] = $noActive;
		if (empty($active) && empty($noActive)) {
			$data = [];
		}
		print json_encode($data);
	}

	public function actionNotActive()
	{
		$model = new Notification();
		$data = $model->find()->where(['active' => 1])->all();
		foreach ($data as $item) {
			$item->active = 0;
			$item->save();
		}
	}
}