<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\votante;

/**
 * VotanteSearch represents the model behind the search form of `common\models\votante`.
 */
class VotanteSearch extends votante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key_id', 'partido_key_id'], 'integer'],
            [['nombre', 'a_paterno', 'a_materno', 'tel', 'user', 'clave', 'correo'], 'safe'],
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
        $query = votante::find();

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
            'partido_key_id' => $this->partido_key_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'a_paterno', $this->a_paterno])
            ->andFilterWhere(['like', 'a_materno', $this->a_materno])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'clave', $this->clave])
            ->andFilterWhere(['like', 'correo', $this->correo]);

        return $dataProvider;
    }
}
