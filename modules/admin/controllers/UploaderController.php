<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\ImageManager; // ActiveRecord Object
use app\modules\admin\models\SimpleImage; // Resizing images class
use app\modules\admin\models\FileUpload; // Uploader handler class
use Yii;

class UploaderController extends Controller {

	public $enableCsrfValidation = false;

	public function actionDelete()
    {
    	$dir = 'uploads/';
    	$name = Yii::$app->request->post('img');
    	$model = new ImageManager();
    	$model->delImage($dir, $name);
    }

    public function actionUpload()
    {
    	$dir = 'uploads/';
		$valid_extensions = ['gif', 'png', 'jpeg', 'jpg'];

		$Upload = new FileUpload();
		$result = $Upload->handleUpload($dir, $valid_extensions);

		if (!$result) {
		    echo json_encode(['success' => false, 'msg' => $Upload->getErrorMsg()]);   
		} else {

			// Resize uploaded image
			$image = new SimpleImage();
			$dir_resize = 'uploads/min/';
			$image->load($dir . $Upload->newFileName);
			$image->resize(200, 200);
			$image->save($dir_resize . $Upload->newFileName);

			// Save image in db
			$file = $dir . $Upload->newFileName;
			if (file_exists($file)) {
				$model = new ImageManager();
				$model->name = $Upload->newFileName;
				$model->save(false);
			}

		    echo json_encode(['success' => true, 'file' => $Upload->getFileName()]);
		}
    }
}