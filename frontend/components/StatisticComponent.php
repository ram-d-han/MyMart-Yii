<?php

namespace frontend\components;
use yii;
use yii\base\component;
use frontend\models\statistic;

class StatisticComponent extends Component {
	const EVENT_SAVE_STATISTIC = "save-statistic";

	public static function handlerSave() {

	$newStats = new Statistic();
        $newStats->datetime = date('Y-m-d');
        $newStats->user_ip = Yii::$app->request->userIP;
        $newStats->user_host = Yii::$app->request->userHost;
        $newStats->user_info = Yii::$app->request->pathInfo;
        $newStats->query_string = Yii::$app->request->queryString;
        $newStats->save();
	}
}

?>