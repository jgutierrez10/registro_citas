<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salon".
 *
 * @property string $salon_id
 * @property string $nombre_salon
 * @property string $ubicacion_salon
 *
 * @property Clase[] $clases
 */
class Salon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_salon', 'ubicacion_salon'], 'required'],
            [['nombre_salon'], 'string', 'max' => 45],
            [['ubicacion_salon'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'salon_id' => 'Salon ID',
            'nombre_salon' => 'Nombre Salon',
            'ubicacion_salon' => 'Ubicacion Salon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClases()
    {
        return $this->hasMany(Clase::className(), ['salon_id' => 'salon_id']);
    }
}
