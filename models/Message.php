<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 22.04.2016
 * Time: 20:26
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public function role()
    {
        if (Yii::$app->user->id == $this->sender) {
            if ($this->sender_r == 0)
            {
                return 'warning';
            }else
            {
                return 'success';
            }
        } else if (Yii::$app->user->id == $this->recipient  )
        {
            if($this->recipient_r == 0)
            {
                return 'warning';
            }else
            {
                return 'success';
            }
        }
    }
}