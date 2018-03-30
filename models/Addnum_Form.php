<?php
namespace app\models;


use yii\base\Model;

class Addnum_Form extends Model{

    public $acctype;
    public $number;
    public $password;

    public function rules()
    {
        return [
            [['acctype'],'required'],
            [['number'],'required'],
            [['password'],'required'],
        ];
    }
}