<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `backend\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDOrder', 'OrderTotalPrice', 'IDOrderDetails', 'IDPaymant', 'IDDelivery'], 'integer'],
            [['OrderDate', 'OrderNote', 'OrderStatus'], 'safe'],
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
        $query = Orders::find();

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
            'IDOrder' => $this->IDOrder,
            'OrderDate' => $this->OrderDate,
            'OrderTotalPrice' => $this->OrderTotalPrice,
            'IDOrderDetails' => $this->IDOrderDetails,
            'IDPaymant' => $this->IDPaymant,
            'IDDelivery' => $this->IDDelivery,
        ]);

        $query->andFilterWhere(['like', 'OrderNote', $this->OrderNote])
            ->andFilterWhere(['like', 'OrderStatus', $this->OrderStatus]);

        return $dataProvider;
    }
}
