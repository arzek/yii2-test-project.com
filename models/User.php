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
}
