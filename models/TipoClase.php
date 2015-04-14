<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_clase".
 *
 * @property string $tipo_clase_id
 * @property string $descripcion_tipo_clase
 *
 * @property Clase[] $clases
 */
class TipoClase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_clase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion_tipo_clase'], 'required'],
            [['descripcion_tipo_clase'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_clase_id' => 'Tipo Clase ID',
            'descripcion_tipo_clase' => 'Descripcion Tipo Clase',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClases()
    {
        return $this->hasMany(Clase::className(), ['tipo_clase_id' => 'tipo_clase_id']);
    }
}
