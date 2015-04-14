<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clase;

/**
 * PostClase represents the model behind the search form about `app\models\Clase`.
 */
class PostClase extends Clase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clase_id', 'duracion_minuto_clase', 'tipo_clase_id', 'salon_id'], 'integer'],
            [['nombre_clase', 'descripcion_clase', 'fecha_clase', 'hora_inicio_clase', 'hora_fin_clase'], 'safe'],
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
        $query = Clase::find();

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
            'clase_id' => $this->clase_id,
            'fecha_clase' => $this->fecha_clase,
            'hora_inicio_clase' => $this->hora_inicio_clase,
            'hora_fin_clase' => $this->hora_fin_clase,
            'duracion_minuto_clase' => $this->duracion_minuto_clase,
            'tipo_clase_id' => $this->tipo_clase_id,
            'salon_id' => $this->salon_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_clase', $this->nombre_clase])
            ->andFilterWhere(['like', 'descripcion_clase', $this->descripcion_clase]);

        return $dataProvider;
    }
}
