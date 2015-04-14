<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clase".
 *
 * @property string $clase_id
 * @property string $nombre_clase
 * @property string $descripcion_clase
 * @property string $fecha_clase
 * @property string $hora_inicio_clase
 * @property string $hora_fin_clase
 * @property integer $duracion_minuto_clase
 * @property string $tipo_clase_id
 * @property string $salon_id
 *
 * @property TipoClase $tipoClase
 * @property Salon $salon
 * @property InstructorClase[] $instructorClases
 */
class Clase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_clase', 'descripcion_clase', 'fecha_clase', 'hora_inicio_clase', 'hora_fin_clase', 'duracion_minuto_clase', 'tipo_clase_id', 'salon_id'], 'required'],
            [['fecha_clase', 'hora_inicio_clase', 'hora_fin_clase'], 'safe'],
            [['duracion_minuto_clase', 'tipo_clase_id', 'salon_id'], 'integer'],
            [['nombre_clase'], 'string', 'max' => 100],
            [['descripcion_clase'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clase_id' => 'Clase ID',
            'nombre_clase' => 'Nombre Clase',
            'descripcion_clase' => 'Descripcion Clase',
            'fecha_clase' => 'Fecha Clase',
            'hora_inicio_clase' => 'Hora Inicio Clase',
            'hora_fin_clase' => 'Hora Fin Clase',
            'duracion_minuto_clase' => 'Duracion Minuto Clase',
            'tipo_clase_id' => 'Tipo Clase ID',
            'salon_id' => 'Salon ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoClase()
    {
        return $this->hasOne(TipoClase::className(), ['tipo_clase_id' => 'tipo_clase_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalon()
    {
        return $this->hasOne(Salon::className(), ['salon_id' => 'salon_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstructorClases()
    {
        return $this->hasMany(InstructorClase::className(), ['clase_id' => 'clase_id']);
    }
}
