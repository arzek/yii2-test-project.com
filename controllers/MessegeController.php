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
    public function actionSingle($id)
    {
        $massage = Message::find()->where(['id' => $id])->all();
        if($massage[0]->sender == Yii::$app->user->id || $massage[0]->recipient == Yii::$app->user->id )
        {
            if($massage[0]->sender ==Yii::$app->user->id )
            {
                $massage[0]->sender_r = 1;
            }else if($massage[0]->recipient == Yii::$app->user->id)
            {
                $massage[0]->recipient_r = 1;
            }

            $massage[0]->save();

            return $this->render('single',['massage'=>$massage[0]]);
        }else
        {
           return $this->goHome();
        }


    }
}