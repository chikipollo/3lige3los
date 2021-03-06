<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VotanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Votantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="votante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Votante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'key_id',
            'nombre',
            'a_paterno',
            'a_materno',
            'tel',
            // 'user',
            // 'clave',
            // 'correo',
            // 'partido_key_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
