<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email','password'],'required'],
            ['email','email'],
            ['password','validatePassword'],
        ];
    }
    public function validatePassword($attribute,$param)
    {
        if(!$this->hasErrors())
        {
            $user = $this->getUser();

            if(!$user || (!$user->validatePassword($this->password)))
            {
                $this->addError($attribute,'Username or Password incorrect');
            }
        }

    }
    public function getUser()
    {
        return User::findOne(['email' =>$this->email]);
    }
}