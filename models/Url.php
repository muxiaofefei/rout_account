<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "url".
 *
 * @property integer $urlid
 * @property string $platid
 * @property string $address
 * @property string $notice
 */
class Url extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['platid', 'address', 'notice'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urlid' => 'Urlid',
            'platid' => 'Platid',
            'address' => 'Address',
            'notice' => 'Notice',
        ];
    }
}
