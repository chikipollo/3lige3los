<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\candidatos */

$this->title = 'Create Candidatos';
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidatos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
