<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "platform".
 *
 * @property integer $platid
 * @property string $platname
 * @property string $typeid
 */
class Platform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'platform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['platname', 'typeid'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'platid' => 'Platid',
            'platname' => 'Platname',
            'typeid' => 'Typeid',
        ];
    }
}
