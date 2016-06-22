<?php

namespace app\modules\blog\controllers;

use app\modules\blog\models\Posts;
use app\modules\blog\models\PostCategory;
use yii\web\Controller;
use yii\web\HttpException;
use Yii;

class DefaultController extends Controller
{

    public function actionIndex($ctg = null)
    {
    	$category_model = new PostCategory();
    	$categories = $category_model::find()->all();
        $post_model = new Posts();
        if (!empty($ctg)) {
        	$posts = $post_model::findAll(['category_id' => $ctg]);
            if (empty($posts)) {
                throw new HttpException(404);
            }
        } else $posts = $post_model::find()->all();
        return $this->render('index', [
        		'posts' => $posts,
        		'categories' => $categories,
        	]);
    }

    public function actionPost($link)
    {
        $model = new Posts();
        $post = $model::findOne(['link' => $link]);
        if (empty($post)) {
            throw new HttpException(404);
        }
        return $this->render('post', ['post' => $post]);
    }
}