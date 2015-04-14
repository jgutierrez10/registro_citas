<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dia_feriado".
 *
 * @property string $dia_feriado_id
 * @property string $fecha_dia_feriado
 * @property string $descripcion_dia_feriado
 */
class DiaFeriado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dia_feriado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_dia_feriado', 'descripcion_dia_feriado'], 'required'],
            [['fecha_dia_feriado'], 'safe'],
            [['descripcion_dia_feriado'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dia_feriado_id' => 'Dia Feriado ID',
            'fecha_dia_feriado' => 'Fecha Dia Feriado',
            'descripcion_dia_feriado' => 'Descripcion Dia Feriado',
        ];
    }
}
