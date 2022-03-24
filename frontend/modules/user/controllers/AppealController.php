<?php
namespace app\modules\user\controllers;


use Yii;
use app\models\search\AppealSearch;
use common\models\Appeal;
use yii\web\Controller;

class AppealController extends Controller
{

    public function actionIndex()
    {
        $searchModel = new AppealSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}