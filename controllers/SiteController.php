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
        return $this->render('login');
    }
}
