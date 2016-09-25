<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VotanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="votante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'key_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'a_paterno') ?>

    <?= $form->field($model, 'a_materno') ?>

    <?= $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'clave') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'partido_key_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
