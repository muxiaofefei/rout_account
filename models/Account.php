<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $accid
 * @property string $number
 * @property string $password
 * @property string $platid
 * @property string $acctype
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'password', 'platid', 'acctype'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'accid' => 'Accid',
            'number' => 'Number',
            'password' => 'Password',
            'platid' => 'Platid',
            'acctype' => 'Acctype',
        ];
    }
}
