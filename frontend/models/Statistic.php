<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "statistic".
 *
 * @property int $id
 * @property string|null $access-time
 * @property string|null $user_ip
 * @property string|null $user_host
 * @property string|null $path_info
 * @property string|null $query_string
 */
class Statistic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime'], 'safe'],
            [['user_ip'], 'string', 'max' => 20],
            [['user_host', 'user_info', 'query_string'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime' => 'Date Time',
            'user_ip' => 'User Ip',
            'user_host' => 'User Host',
            'user_info' => 'User Info',
            'query_string' => 'Query String',
        ];
    }
}
