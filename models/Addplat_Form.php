<?php
namespace app\models;

use yii\base\Model;

class Addplat_Form extends Model{

    public $typeid; //正式 测试
    public $platname; //平台名称
    public $number1; //管理员
    public $password1;
    public $number2; //操作员
    public $password2;
    public $address; //测试地址
    public $notice; //备注

    public function rules()
    {
        return [
            [['typeid'],'required'],
            [['platname'],'required'],
            [['number1'],'string'],
            [['password1'],'string'],
            [['number2'],'string'],
            [['password2'],'string'],
            [['address'],'string'],
            [['notice'],'string'],
        ];
    }

}