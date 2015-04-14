<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property string $cliente_id
 * @property string $nombre_cliente
 * @property string $apellido_cliente
 * @property string $email_cliente
 * @property string $cedula_cliente
 * @property string $telefono_cliente
 *
 * @property Usuario[] $usuarios
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cliente', 'apellido_cliente', 'email_cliente', 'cedula_cliente', 'telefono_cliente'], 'required'],
            [['nombre_cliente', 'apellido_cliente'], 'string', 'max' => 100],
            [['email_cliente'], 'string', 'max' => 45],
            [['cedula_cliente'], 'string', 'max' => 8],
            [['telefono_cliente'], 'string', 'max' => 11],
            [['cedula_cliente'], 'unique'],
            [['email_cliente'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cliente_id' => 'Cliente ID',
            'nombre_cliente' => 'Nombre Cliente',
            'apellido_cliente' => 'Apellido Cliente',
            'email_cliente' => 'Email Cliente',
            'cedula_cliente' => 'Cedula Cliente',
            'telefono_cliente' => 'Telefono Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['cliente_id' => 'cliente_id']);
    }
}
