<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $usuario_id
 * @property string $nombre_usuario
 * @property string $clave_usuario
 * @property string $tipo_usuario_id
 * @property boolean $activo
 * @property string $cliente_id
 *
 * @property InstructorClase[] $instructorClases
 * @property TipoUsuario $tipoUsuario
 * @property Cliente $cliente
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_usuario', 'clave_usuario', 'tipo_usuario_id', 'cliente_id'], 'required'],
            [['tipo_usuario_id', 'cliente_id'], 'integer'],
            [['activo'], 'boolean'],
            [['nombre_usuario', 'clave_usuario'], 'string', 'max' => 45],
            [['nombre_usuario'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'nombre_usuario' => 'Nombre Usuario',
            'clave_usuario' => 'Clave Usuario',
            'tipo_usuario_id' => 'Tipo Usuario ID',
            'activo' => 'Activo',
            'cliente_id' => 'Cliente ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstructorClases()
    {
        return $this->hasMany(InstructorClase::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoUsuario()
    {
        return $this->hasOne(TipoUsuario::className(), ['tipo_usuario_id' => 'tipo_usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['cliente_id' => 'cliente_id']);
    }
}
