<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends activeRecord implements IdentityInterface
{
    public function setPassword($password)
    {
        $this->password =sha1($password);
    }
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }
    /***** IdentityInterface *********************/

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }
    public  function getId()
    {
        return $this->id;
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }
    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
    /***************  Referral *****************/
    public static function Referral($referral)
    {
        $user =  self::findIdentity($referral);
        if($referral!= 0)
        {
            $user->bonus++;
            $user->save();
            if($user->referral!=0)
            {
                self::Referral($user->referral);
            }
        }else
        {
            return true;
        }
    }
    /************** LK *********/
    public function rules()
    {
        return [
            [['number','name'],'required'],
            ['number','number','min' => 8],
        ];
    }
}
