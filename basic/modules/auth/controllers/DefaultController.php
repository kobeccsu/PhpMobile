<?php

namespace app\modules\Auth\controllers;

use yii\web\Controller;

/**
 * Default controller for the `Auth` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionLogin()
    {
        echo 11;
    }

    public function actionRegister()
    {
        $this->layout = false;
        if(\Yii::$app->request->isPost){
            $username = \Yii::$app->request->post('username');
            $password = \Yii::$app->request->post('psw');
            //todo: 写个注册，不要懒嘛，一回生二回熟
        }
        return $this->render('register');
    }
}
