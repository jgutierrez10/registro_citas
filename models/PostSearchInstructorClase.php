<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InstructorClase;

/**
 * PostSearchInstructorClase represents the model behind the search form about `app\models\InstructorClase`.
 */
class PostSearchInstructorClase extends InstructorClase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instructor_clase_id', 'usuario_id', 'clase_id', 'rol_instructor_clase'], 'integer'],
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
        $query = InstructorClase::find();

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
            'instructor_clase_id' => $this->instructor_clase_id,
            'usuario_id' => $this->usuario_id,
            'clase_id' => $this->clase_id,
            'rol_instructor_clase' => $this->rol_instructor_clase,
        ]);

        return $dataProvider;
    }
}
