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

class MessageController extends Controller
{
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $where = "sender= ".Yii::$app->user->id." OR recipient=".Yii::$app->user->id;
        $massages = Message::find()->where($where)->all();


        return $this->render('index',['massages' => $massages]);
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
    public function actionWrite($id)
    {
        
        $message = new AddMessage();

        if(isset($_POST['AddMessage']))
        {
            $message->title = $_POST['AddMessage']['title'];
            $message->text = $_POST['AddMessage']['text'];
            $message->sender = Yii::$app->user->id;
            $message->recipient = $id;

            if($message->validate() && $message->addMassage())
            {
                return $this->goHome();
            }
        }

        return $this->render('write',['message' =>$message]);
    }
}