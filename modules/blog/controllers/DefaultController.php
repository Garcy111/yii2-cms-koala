<?php

namespace app\modules\blog\controllers;

use app\modules\blog\models\Posts;
use app\modules\blog\models\PostCategory;
use app\modules\blog\models\Tags;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\HttpException;
use Yii;


class DefaultController extends Controller
{

    /**
     * @param null $ctg
     * @param null $tag
     * @return string
     */
    public function actionIndex($ctg = null, $tag = null)
    {
        if (!empty($ctg)) {
            $query = Posts::find()->where(['category_id' => $ctg]);
        } elseif(!empty($tag)){
            $tag = Tags::findOne(['name' => $tag]);
            $query = $tag->getPosts();
        } else $query = Posts::find();

        $countQuery = clone $query;

        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 5,
            'pageSizeParam' => false,
        ]);

        $categories = PostCategory::find()->all();
        $posts = $query->offset($pages->offset)
            ->orderBy('date DESC')
            ->limit($pages->limit)
            ->all();

        $tags = Tags::find()->all();
        $popular = Posts::find()->orderBy('views DESC')->limit(3)->all();
        return $this->render('index', [
        		'posts' => $posts,
        		'categories' => $categories,
                'tags' => $tags,
                'popular' => $popular,
                'pages' => $pages,
        	]);
    }
    public function actionPost($link)
    {
        $model = new Posts();
        $post = $model::findOne(['link' => $link]);
        if (empty($post)) {
            throw new HttpException(404);
        }
        $categories = PostCategory::find()->all();
        $tags = Tags::find()->all();
        $post->views += 1;
        $post->save();
        $popular = Posts::find()->orderBy('views DESC')->limit(3)->all();
        return $this->render('post', [
                'post' => $post,
                'categories' => $categories,
                'popular' => $popular,
                'tags' => $tags,
            ]);
    }

    public function actionAddLike()
    {
        $id = Yii::$app->request->post('id');
        $post = Posts::findOne(['id' => $id]);
        $like = $post->likes;
        $like++;
        $post->likes = $like;
        $post->save(false);
    }

    public function actionSubLike()
    {
        $id = Yii::$app->request->post('id');
        $post = Posts::findOne(['id' => $id]);
        $like = $post->likes;
        $like--;
        $post->likes = $like;
        $post->save(false);
    }
}