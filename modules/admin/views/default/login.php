<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->registerCssFile('/modules/admin/login.css', $options = [
    'depends' => [
        'app\assets\MainAsset',
        ]
    ]);
$this->registerJsFile('/modules/admin/jquery.particleground.min.js');
$this->registerJsFile('/modules/admin/login.js');
$this->title = 'Вход в панель администратора';
?>

<div class="admin-default-login">
<div class="hero">
	<div id="logInBlock">
		<h1>AdminPanel</h1>
		
		<?php $form = ActiveForm::begin([
        	'id' => 'login-form',
    	]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'rememberMe']) ?>

        <div class="form-group">
                <?= Html::submitButton('Войти', ['class' => 'btn-send', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
	</div>
</div>
</div>