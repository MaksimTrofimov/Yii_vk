<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property integer $auth_key
 * @property integer $access_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'phone'], 'required'],
            [['auth_key', 'access_token'], 'integer'],
            [['username'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'phone' => 'Phone',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}
