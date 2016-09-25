<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\candidatos */

$this->title = 'Update Candidatos: ' . $model->key_id;
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key_id, 'url' => ['view', 'id' => $model->key_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidatos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
