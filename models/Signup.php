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
            [['email','password','number','name'],'required'],
            ['email','email'],
            ['email','unique','targetClass' => 'app\models\User'],
            ['number','number','min' => 8],
            ['referral','number'],
            ['password','string', 'min' => 6]

        ];
    }
    public function signup()
    {
        $user = new User;
        $user->email = $this->email;
        $user->name = $this->name;
        $user->number = $this->number;
        $user->referral = $this->referral;
        $user->bonus = 0;
        $user->setPassword($this->password);


        return $user->save();

    }
}