<?php  
use common\models\Partidos;
namespace common\models;

class widgets extends \yii\db\ActiveRecord{
	public static function getPartido($id){
		$partido = Partido::find()->where(['key_id' => $id])->one();
		return $partido->nombre;
	}
}
?>