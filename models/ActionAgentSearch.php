<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActionAgent;

/**
 * ActionAgentSearch represents the model behind the search form about `app\models\ActionAgent`.
 */
class ActionAgentSearch extends ActionAgent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actionAgent_id', 'actionAgent_idAgent', 'actionAgent_idActionPO', 'actionAgent_ordre'], 'integer'],
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
        $query = ActionAgent::find();

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
            'actionAgent_id' => $this->actionAgent_id,
            'actionAgent_idAgent' => $this->actionAgent_idAgent,
            'actionAgent_idActionPO' => $this->actionAgent_idActionPO,
            'actionAgent_ordre' => $this->actionAgent_ordre,
        ]);

        return $dataProvider;
    }
}
