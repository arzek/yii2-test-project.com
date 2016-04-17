<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Signup;


class SiteController extends Controller
{
   public function actionIndex()
   {
       return $this->render('index');
   }
    public function actionLogin()
    {
        $login_model = new Login();

        return $this->render('login',['lodin_model' => $login_model]);
    }
}
