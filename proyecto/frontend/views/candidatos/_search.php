<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CandidatosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidatos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'key_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'twitter') ?>

    <?= $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'p_personal') ?>

    <?php // echo $form->field($model, 'ranking') ?>

    <?php // echo $form->field($model, 'partido_key_id') ?>

    <?php // echo $form->field($model, 'propuesta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
