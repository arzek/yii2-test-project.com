<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model
{
    public $email;
    public $name;
    public $number;
    public $referral;
    public $password;

    public function rules()
    {
        return [
            [['email','password','number'],'required'],
            ['email','email'],
            ['email','unique','targetClass' => 'app\models\User'],
            ['number','number','min' => 9],
            ['referral','number'],
            ['password','string', 'min' => 6]

        ];
    }
}