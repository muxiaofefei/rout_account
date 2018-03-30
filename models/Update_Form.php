<?php
namespace app\models;


use yii\base\Model;

class Update_Form extends Model{

    public $platname;
    public $address;

    public function rules()
    {
        return [
            [['platname'],'string'],
            [['address'],'string'],
        ];
    }




}