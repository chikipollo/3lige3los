<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "votante".
 *
 * @property integer $key_id
 * @property string $nombre
 * @property string $a_paterno
 * @property string $a_materno
 * @property string $tel
 * @property string $user
 * @property string $clave
 * @property string $correo
 * @property integer $partido_key_id
 */
class Votante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'votante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'a_paterno', 'a_materno', 'tel', 'user', 'clave', 'correo'], 'required'],
            [['partido_key_id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['a_paterno', 'a_materno'], 'string', 'max' => 50],
            [['tel'], 'string', 'max' => 45],
            [['user', 'clave'], 'string', 'max' => 20],
            [['correo'], 'string', 'max' => 30],
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
            'nombre' => 'Nombre Completo',
            'a_paterno' => 'Apellido Paterno',
            'a_materno' => 'Apellido Materno',
            'tel' => 'Telelefono',
            'user' => 'Nombre de Usuario',
            'clave' => 'Contraseña',
            'correo' => 'Correo Electronico',
            'partido_key_id' => 'Tipo',
        ];
    }
}
