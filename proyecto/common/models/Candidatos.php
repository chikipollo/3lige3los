<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "candidatos".
 *
 * @property integer $key_id
 * @property string $nombre
 * @property string $foto
 * @property string $twitter
 * @property string $facebook
 * @property string $p_personal
 * @property double $ranking
 * @property integer $partido_key_id
 * @property string $propuesta
 */
class Candidatos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'partido_key_id'], 'required'],
            [['ranking'], 'number'],
            [['partido_key_id'], 'integer'],
            [['nombre', 'foto', 'twitter', 'p_personal'], 'string', 'max' => 100],
            [['facebook', 'propuesta'], 'string', 'max' => 45],
            [['partido_key_id'], 'exist', 'skipOnError' => true, 'targetClass' => Partido::className(), 'targetAttribute' => ['partido_key_id' => 'key_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'key_id' => 'Key ID',
            'nombre' => 'Nombre',
            'foto' => 'Foto',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'p_personal' => 'P Personal',
            'ranking' => 'Ranking',
            'partido_key_id' => 'Partido Key ID',
            'propuesta' => 'Propuesta',
        ];
    }
}
