<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Login;


class SiteController extends Controller
{
   public function actionIndex()
   {
       return $this->render('index');
   }
    public function actionLogin()
    {
        $login_model = new Login();

        if (Yii::$app->request->post('Login')) {
            $login_model->attributes = Yii::$app->request->post('Login');

            if ($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }

        return $this->render('login', ['login_model' => $login_model]);
    }
}
