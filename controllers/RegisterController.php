<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Signup;
use app\models\UploadForm;
use yii\web\UploadedFile;

class RegisterController extends Controller
{
    public function actionIndex()
    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {
            $model->attributes = Yii::$app->request->post('Signup');
            $model->image = UploadedFile::getInstance($model, 'image');

            if($model->validate() && $model->signup())
            {
                return $this->goHome();
            }
        }

        return $this->render('index',['model' => $model]);
    }

}