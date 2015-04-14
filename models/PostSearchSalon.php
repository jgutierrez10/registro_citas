<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Salon;

/**
 * PostSearchSalon represents the model behind the search form about `app\models\Salon`.
 */
class PostSearchSalon extends Salon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salon_id'], 'integer'],
            [['nombre_salon', 'ubicacion_salon'], 'safe'],
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
        $query = Salon::find();

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
            'salon_id' => $this->salon_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_salon', $this->nombre_salon])
            ->andFilterWhere(['like', 'ubicacion_salon', $this->ubicacion_salon]);

        return $dataProvider;
    }
}
