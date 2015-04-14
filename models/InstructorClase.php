<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instructor_clase".
 *
 * @property string $instructor_clase_id
 * @property string $usuario_id
 * @property string $clase_id
 * @property integer $rol_instructor_clase
 *
 * @property Usuario $usuario
 * @property Clase $clase
 */
class InstructorClase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instructor_clase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'clase_id', 'rol_instructor_clase'], 'required'],
            [['usuario_id', 'clase_id', 'rol_instructor_clase'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'instructor_clase_id' => 'Instructor Clase ID',
            'usuario_id' => 'Usuario ID',
            'clase_id' => 'Clase ID',
            'rol_instructor_clase' => 'Rol Instructor Clase',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClase()
    {
        return $this->hasOne(Clase::className(), ['clase_id' => 'clase_id']);
    }
}
