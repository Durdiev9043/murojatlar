<?php

namespace app\modules\user\controllers;

use Yii;
use app\models\search\LavozimSearch;
use app\models\search\AppealSearch;
use yii\web\Controller;

class LavozimController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new LavozimSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}