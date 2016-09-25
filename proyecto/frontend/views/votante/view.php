<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\votante */

$this->title = $model->key_id;
$this->params['breadcrumbs'][] = ['label' => 'Votantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votante-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->key_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->key_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'key_id',
            'nombre',
            'a_paterno',
            'a_materno',
            'tel',
            'user',
            'clave',
            'correo',
            'partido_key_id',
        ],
    ]) ?>

</div>