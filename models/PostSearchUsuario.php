<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * PostSearchUsuario represents the model behind the search form about `app\models\Usuario`.
 */
class PostSearchUsuario extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'tipo_usuario_id', 'cliente_id'], 'integer'],
            [['nombre_usuario', 'clave_usuario'], 'safe'],
            [['activo'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'usuario_id' => $this->usuario_id,
            'tipo_usuario_id' => $this->tipo_usuario_id,
            'activo' => $this->activo,
            'cliente_id' => $this->cliente_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_usuario', $this->nombre_usuario])
            ->andFilterWhere(['like', 'clave_usuario', $this->clave_usuario]);

        return $dataProvider;
    }
}
