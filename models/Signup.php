<?php

namespace app\models;

use yii\base\Model;
use app\models\User;
use yii\web\UploadedFile;

class Signup extends Model
{
    public $email;
    public $name;
    public $number;
    public $referral;
    public $password;
    public $image;

    public function rules()
    {
        return [
            [['email','password','number','name'],'required'],
            ['email','email'],
            ['email','unique','targetClass' => 'app\models\User'],
            ['number','number','min' => 8],
            ['referral','number'],
            ['password','string', 'min' => 6],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

        ];
    }
    public function signup()
    {
        $user = new User;

        if(isset($this->image))
        {
            $this->image->saveAs('uploads/img' . $this->image->baseName . '.' . $this->image->extension);
            $user->img = "web/uploads/img/".$this->image->name;
        }

        $user->email = $this->email;
        $user->name = $this->name;
        $user->number = $this->number;
        $user->referral = $this->referral;
        $user->bonus = 0;
        $user->setPassword($this->password);

        User::Referral($this->referral);

        

        return $user->save();

    }
    
}