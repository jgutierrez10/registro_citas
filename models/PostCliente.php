<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * PostCliente represents the model behind the search form about `app\models\Cliente`.
 */
class PostCliente extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_id'], 'integer'],
            [['nombre_cliente', 'apellido_cliente', 'email_cliente', 'cedula_cliente', 'telefono_cliente'], 'safe'],
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
        $query = Cliente::find();

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
            'cliente_id' => $this->cliente_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_cliente', $this->nombre_cliente])
            ->andFilterWhere(['like', 'apellido_cliente', $this->apellido_cliente])
            ->andFilterWhere(['like', 'email_cliente', $this->email_cliente])
            ->andFilterWhere(['like', 'cedula_cliente', $this->cedula_cliente])
            ->andFilterWhere(['like', 'telefono_cliente', $this->telefono_cliente]);

        return $dataProvider;
    }
}
