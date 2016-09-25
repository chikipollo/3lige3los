<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CandidatosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Candidatos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'key_id',
            'nombre',
            'foto',
            'twitter',
            'facebook',
            // 'p_personal',
            // 'ranking',
            // 'partido_key_id',
            // 'propuesta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
