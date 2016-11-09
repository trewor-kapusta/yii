<?php

namespace app\models;

use yii\base\Model;
use Yii;
use app\models\User;

class SignupForm extends Model
{
    public $username;
    public $password;

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

    public function signup()
    {
       if ($this->validate()) {
           $user = new User();
           $user->username = $this->username;
           $user->password = $this->password;
           $user->save();
           return $user;
       }
        return null;

    }
}
