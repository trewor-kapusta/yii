<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Me extends Model
{
    public $me;


    public function edit($me)
    {
        if ($this->validate()) {
            $user = User::findOne(Yii::$app->user->id);
            $user->me = $me;
            $user->update();
            return $user;
        }
    }

    public function init()
    {
        $this->me = Yii::$app->user->identity->me;
    }


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['me'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

}
