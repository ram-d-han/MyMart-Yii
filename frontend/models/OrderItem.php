<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $order_id
 * @property int|null $item_id
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_item', 'item_id'], 'required'],
            [['item_id'], 'integer'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'item_id' => 'Item ID',
        ];
    }


    public function getItem()
    {
        return $this->hasOne(Product::className(), ['id' => 'item_id']);
    }


    public function getOrder()
    {
        return $this->hasOne(Order::classNames(), ['id' => 'order_id']);
    }
}
