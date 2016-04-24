<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 21.04.2016
 * Time: 10:57
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;


class UserController extends Controller
{
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $users = User::find()->orderBy('id')->all();

        $count = count($users);
        for($i =0;$i<$count;$i++)
        {
            if($users[$i]['id'] == Yii::$app->user->id)
            {
                unset($users[$i]);
            }
        }

        return $this->render('index',['users' => $users,]);
    }
    public function actionSingle($id)
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $user = User::findIdentity($id);



        return $this->render('single',['user' =>$user]);
    }
    public function actionProfile()
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $user = User::findIdentity(Yii::$app->user->id);
        return $this->render('profile',['user' =>$user]);
    }
    public function actionEdit()
    {

        if(Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $user = User::findIdentity(Yii::$app->user->id);
       if(isset($_POST['User'])  )
        {
            $user->attributes = $_POST['User'];
            

            if($user->validate())
            {
                $user->save();
                return $this->goHome();
            }
        }

        return $this->render('edit',['user' => $user,]);

    }

}