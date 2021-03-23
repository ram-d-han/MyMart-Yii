<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="order-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'date',
            'customer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
