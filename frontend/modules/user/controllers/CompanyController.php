<?php
namespace app\modules\user\controllers;


use app\models\search\CompanySearch;
use app\models\search\LavozimSearch;
use Yii;
use app\models\search\AppealSearch;
use common\models\Appeal;
use yii\web\Controller;

class CompanyController extends Controller
{

    public function actionIndex()
    {
        $searchModel = new CompanySearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
