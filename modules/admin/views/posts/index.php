<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\admin\models\Post;
use app\modules\admin\models\PostCategory;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Все записи';
?>
<div class="admin-posts-index">
<div class="content">
    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a(Html::button('Создать', ['class' => 'btn btn-success']), ['create']) ?>
    </p>
<?php Pjax::begin(['enablePushState' => false, 'timeout' => 3000]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            // 'id',
            [
                'label' => 'Миниатюра',
                'contentOptions' => ['class' => 'not-set'],
                'format' => 'raw',
                'value' => function($data){
                    $img = Html::img($data->miniature,[
                        'alt'=>'Миниатюра',
                        'style' => 'width:120px;'
                    ]);
                    $data = empty($data->miniature) ? Yii::t('yii', '(not set)') : $img;
                    return $data;
                },
            ],
            [
                'attribute'=>'title',
                'label'=>'Заголовок',
            ],
            // 'content:ntext',
            [
                'attribute'=>'category_id',
                'label'=>'Категория',
                'filter' => PostCategory::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => function($data){
                    return $data->category ? $data->category->name : null;
                }
            ],
            [
                'attribute'=>'link',
                'label'=>'Адрес',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Действия',
            ],
            [
                'attribute'=>'date',
                'label'=>'Создано',
                'format'=> ['date', 'dd.MM.Y, HH:mm'],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
</div>