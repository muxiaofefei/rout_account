<?php

namespace app\controllers;

use app\models\Addnum_Form;
use app\models\Platform;
use app\models\Type;
use app\models\Update_Form;
use app\models\Url;
use yii;
use yii\web\Controller;
use app\models\Account;
use app\models\Addplat_Form;




class SiteController extends Controller
{

    
    public function actionIndex()
    {
//        $this ->layout = false;
        $result = Yii::$app->cache->get('result');
        $result=false;

        if($result==false){
            //获取平台
            $data['platform'] = Platform::find()
                ->asArray()
                ->all();
            //获取平台网址
            $data['type'] = Type::find()
                ->asArray()
                ->all();
            //获取管理者信息
            $data['account'] = Account::find()
                ->asArray()
                ->all();
            //获取测试地址信息
            $data['url'] = Url::find()
                ->asArray()
                ->all();

            Yii::$app->cache->set("result", $data,5*60);
            $result = Yii::$app->cache->get('result');
        }
//         print_r($result);die;
        return $this->render('index',['result' => $result]);
    }


    public function actionAddplat()
    {
        $addplat = new Addplat_Form();

        $plat_model = new Platform();
        $account_model = new Account();
        $url_model = new Url();

        if ($addplat->load(Yii::$app->request->post())) {

            //插入数据
            $plat_model->typeid = $addplat['typeid'];
            $plat_model->platname = $addplat['platname'];
            $plat_model->save();
            $platid = Yii::$app->db->getLastInsertID(); //获取刚插入的id值

            $url_model->platid = $platid;
            $url_model->address = $addplat['address'];
            $url_model->notice = $addplat['notice'];
            $url_model->save();

            //同时插入多条数据
            $acckey=['platid','number','password','acctype']; //定义插入的字段
            $accvale=array(//数据
                '0'=>array($platid,$addplat['number1'],$addplat['password1'],1),
                '1'=>array($platid,$addplat['number2'],$addplat['password2'],2),
            );
            Yii::$app->db->createCommand()->batchInsert($account_model::tableName(), $acckey, $accvale)->execute();//执行批量添加

            Yii::$app->getSession()->setFlash('success', "平台添加成功！");
            return $this->redirect(array('/site/index'));//添加完成页面跳转
        }

        return $this->render('addplat',[
            'addplat' => $addplat,
        ]);
    }

    public function actionAddnum($platid)
    {
        $addnum = new Addnum_Form();
        $account_model = new Account();

        if ($addnum->load(Yii::$app->request->post())) {

            $account_model->platid = $platid;
            $account_model->number = $addnum['number'];
            $account_model->password = $addnum['password'];
            $account_model->acctype = $addnum['acctype'];
            $account_model->save();

            Yii::$app->getSession()->setFlash('success', "人员添加成功！");
            return $this->redirect(array('/site/index'));//添加完成页面跳转
        }

        return $this->render('addnum',[
            'addnum' => $addnum,
        ]);
    }


    public function actionUp_date($platid)
    {
        $upde_Form = new Update_Form();

        $plat_model = new Platform();
        $account_model = new Account();
        $url_model = new Url();

        $data['plat'] = $plat_model::find()->where(['platid'=>$platid])->asArray()->all();
        $data['acc'] = $account_model::find()->where(['platid'=>$platid])->asArray()->all();
        $data['url'] = $url_model::find()->where(['platid'=>$platid])->asArray()->all();

        if ($upde_Form->load(Yii::$app->request->post())) {


            $plat_model::updateAll(['platname' => $upde_Form['platname']], ['platid'=> $platid]);
            $url_model::updateAll(['address' => $upde_Form['address']], ['platid'=> $platid]);

            Yii::$app->getSession()->setFlash('success', "更新操作成功！");
            return $this->redirect(array('/site/index'));//添加完成页面跳转
        }


        return $this->render('up_date',[
            'upde_Form' => $upde_Form,
            'data' => $data,
        ]);
    }


    public function actionDeleteall($platid)
    {
        $account_model = new Account();
        $plat_model = new Platform();
        $url_model = new Url();


        $account_model->deleteAll(['platid'=>$platid]);
        $plat_model->deleteAll(['platid'=>$platid]);
        $url_model->deleteAll(['platid'=>$platid]);

        Yii::$app->getSession()->setFlash('success', "删除成功！");
        return $this->redirect(array('/site/index'));

    }

    public function actionDelete_acc($accid)
    {
        $account_model = new Account();
        $account_model->deleteAll(['accid'=>$accid]);

        Yii::$app->getSession()->setFlash('success', "删除成功！");
        return $this->redirect(array('/site/index'));

    }




}
