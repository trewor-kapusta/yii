<?php

namespace app\models;

use Yii;
use yii\base\Model;


class EditUserForm extends Model
{
    public $username;
    public $password;

    public function init()
    {
        $this->username = Yii::$app->user->identity->username;
        $this->password = Yii::$app->user->identity->password;
    }

    public function edit($username, $password)
    {
        if ($this->validate()) {
            $user = User::findOne(Yii::$app->user->id);
            $user->username = $username;
            $user->password = $password;
            $user->update();
            return $user;
        }
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['username', 'password'], 'required'],
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
