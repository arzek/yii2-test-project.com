<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 22.04.2016
 * Time: 22:49
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Message;
use app\models\AddMessage;
use app\models\User;

class MessegeController extends Controller
{
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $where = "sender= ".Yii::$app->user->id." OR recipient=".Yii::$app->user->id;
        $massage = Message::find()->where($where)->all();


        return $this->render('index',['massage' => $massage]);
    }
}