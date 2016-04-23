<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 22.04.2016
 * Time: 20:26
 */

namespace app\models;


use yii\base\Model;
use app\models\Message;

class AddMessage extends Model
{
    public $title;
    public $text;
    public $sender;
    public $recipient;

    public function rules()
    {
        return [
            [['title','text'],'required'],
            ['title','string', 'max' => 255]
        ];
    }
    public function addMassage()
    {
        $message = new Message();

        $message->title = $this->title;
        $message->text = $this->text;
        $message->sender = $this->sender;
        $message->recipient = $this->recipient;

        return $message->save();
    }
}