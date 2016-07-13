<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\LoginForm;
use app\modules\admin\models\ChangePassword;
use app\modules\admin\models\json\Chart;
use app\modules\admin\models\Post;
use app\modules\user\models\User;
use Yii;

class DefaultController extends Controller
{

	public $layout = 'admin';

	public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$products = Post::find()->count();
		$users = User::find()->count();
		return $this->render('index', [
				'products' => $products,
				'users' => $users,
			]);
	}

	public function actionChart()
	{
		$data = [
			'2016' => [0,0,0,0,0,0,0,0,0,0,0,0],
			'2017' => [0,0,0,0,0,0,0,0,0,0,0,0],
			'2018' => [0,0,0,0,0,0,0,0,0,0,0,0],
			'2019' => [0,0,0,0,0,0,0,0,0,0,0,0],
			'2020' => [0,0,0,0,0,0,0,0,0,0,0,0],
		];

		$orders = Orders::find()->where(['active' => 1])->orderBy('date ASC')->all();
		
		$years = [];
		foreach ($orders as $order) {
			$year = date('Y', $order->date);
			$years[] = $year;
			$month = date('n', $order->date);
			$data[$year][$month-1] += 1;
		}

		$datasets = [];
		$years = array_values(array_unique($years));
		for ($i=0; count($years) > $i; $i++) {
			$json = new Chart($years[$i], $data[$years[$i]]);
			$datasets[] = $json;
		}
		print json_encode($datasets);
	}

	public function actionSettings()
	{
		$model = new ChangePassword();
		if ($model->load(Yii::$app->request->post())) {
			if ($model->validate()) {
				$model->changePassword();
				Yii::$app->session->setFlash('success', 'Пароль успешно изменен');
				return $this->refresh();
			}
		}
		return $this->render('settings', ['model' => $model]);
	}

    public function actionLogin()
	{	
		$this->layout = 'main';
		if (Yii::$app->user->can('admin')) {
            return $this->redirect('/admin');
        }

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->redirect('/admin');
		}
		return $this->render('login', ['model' => $model]);
	}

	public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/admin/login');
    }
}
