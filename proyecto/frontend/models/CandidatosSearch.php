<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\candidatos;

/**
 * CandidatosSearch represents the model behind the search form of `common\models\candidatos`.
 */
class CandidatosSearch extends candidatos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key_id', 'partido_key_id'], 'integer'],
            [['nombre', 'foto', 'twitter', 'facebook', 'p_personal', 'propuesta'], 'safe'],
            [['ranking'], 'number'],
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
        $query = candidatos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'key_id' => $this->key_id,
            'ranking' => $this->ranking,
            'partido_key_id' => $this->partido_key_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'p_personal', $this->p_personal])
            ->andFilterWhere(['like', 'propuesta', $this->propuesta]);

        return $dataProvider;
    }
}
