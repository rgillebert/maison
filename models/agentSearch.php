<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\agent;

/**
 * agentSearch represents the model behind the search form about `app\models\agent`.
 */
class agentSearch extends agent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agent_id', 'matricule'], 'integer'],
            [['nom'], 'safe'],
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
        $query = agent::find();

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
            'agent_id' => $this->agent_id,
            'matricule' => $this->matricule,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom]);

        return $dataProvider;
    }
}
