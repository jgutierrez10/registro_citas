<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_usuario".
 *
 * @property string $tipo_usuario_id
 * @property string $descripcion_tipo_usuario
 * @property boolean $activo
 *
 * @property Usuario[] $usuarios
 */
class TipoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion_tipo_usuario'], 'required'],
            [['activo'], 'boolean'],
            [['descripcion_tipo_usuario'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tipo_usuario_id' => 'Tipo Usuario ID',
            'descripcion_tipo_usuario' => 'Descripcion Tipo Usuario',
            'activo' => 'Activo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['tipo_usuario_id' => 'tipo_usuario_id']);
    }
}
