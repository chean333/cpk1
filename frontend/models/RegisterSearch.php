<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Register;

/**
 * RegisterSearch represents the model behind the search form about `app\models\Register`.
 */
class RegisterSearch extends Register
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Num'], 'integer'],
            [['date', 'time', 'department', 'list', 'mony', 'register'], 'safe'],
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
        $query = Register::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pagesize'=>15
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Num' => $this->Num,
            'date' => $this->date,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'list', $this->list])
            ->andFilterWhere(['like', 'mony', $this->mony])
            ->andFilterWhere(['like', 'register', $this->register]);

        return $dataProvider;
    }
}
