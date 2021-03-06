<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните все поля для успешной регистрации:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['class' => 'textarea', 'autofocus' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['class' => 'textarea']) ?>

                <?= $form->field($model, 'password')->passwordInput(['class' => 'textarea']) ?>

                <?= $form->field($model, 'role')->radioList(['0'=> 'Студент','1'=> 'Работодатель']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрация', ['class' => 'button', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
