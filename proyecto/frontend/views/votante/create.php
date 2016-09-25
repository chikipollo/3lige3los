<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\votante */

$this->title = 'Registrate!';
$this->params['breadcrumbs'][] = ['label' => 'Votantes', 'url' => ['index']];

?>
<div class="votante-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

document.getElementById('votante-clave').setAttribute('type','password');
document.getElementById('votante-tel').setAttribute('type','number');
function a(){
	alert("funciono");
}
</script>
