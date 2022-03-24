<?php

namespace app\modules\user;

/**
 * Module module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\user\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::$app->layoutPath = "@app/modules/user/views/layouts";

        // custom initialization code goes here
    }
}
