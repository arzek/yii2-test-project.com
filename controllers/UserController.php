<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 21.04.2016
 * Time: 10:57
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        $users = User::find()->orderBy('id')->all();

        return $this->render('index',['users' => $users]);
    }

}