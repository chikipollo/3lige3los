<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\partido */

$this->title = 'Update Partido: ' . $model->key_id;
$this->params['breadcrumbs'][] = ['label' => 'Partidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key_id, 'url' => ['view', 'id' => $model->key_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
