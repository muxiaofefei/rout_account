<?php
error_reporting(E_ALL^E_NOTICE); //隐藏错误提示
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Alert;
?>

<!--提示信息-->
<?php
if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Alert::widget([
        'options' => [
            'class' => 'alert-success', //这里是提示框的class
        ],
        'body' => Yii::$app->getSession()->getFlash('success'), //消息体
    ]);
}
if( Yii::$app->getSession()->hasFlash('error') ) {
    echo Alert::widget([
        'options' => [
            'class' => 'alert-error',
        ],
        'body' => Yii::$app->getSession()->getFlash('error'),
    ]);
} ?>

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/css/styles.css">

<div id="zs">
    <div class="title">路特用户管理系统</div>
    <a href="<?= Url::to(['site/addplat'])?>"><div class="tj">添加+</div></a>
</div>
<div class="guanli">
    <div class="toubu" id="tab_bar">
        <div id="tab1" onclick="myclick(1)" class="biaoti" style="background-color:#46c6df; color: #FFF">测试</div>
        <div id="tab2" onclick="myclick(2)" class="biaoti">正式</div>
    </div>
    <div id="tab1_content" class="tab_css">
        <?php 
                $i = 1;
                foreach ($result['platform'] as $k){ 
                    if($k['typeid']==1)
                    {
                        foreach ($result['type'] as $v) {
                           if($v['typeid']==1){
                                $link = $v['url'];
                           }
                        }
        ?>
        <div class="zj">
            <div class="ltoubu">
                <div class="xh">
                    <?= $k['platname']?>
                </div>
                <div class="xh1">
                    客户端登录地址:
                    <a target="_blank" href="<?= $link?>"><?= $link?></a>
                </div>
                <div class="tj">
                    <a href="<?= Url::to(['site/addnum','platid'=>$k['platid']])?>">添加人员</a>
                </div>
                <div class="tj">
                    <a href="<?= Url::to(['site/up_date','platid'=>$k['platid']])?>">修改地址</a>
                </div>
                <div class="tj">
                    <?=Html::a('删除客户端', ['site/deleteall','platid'=>$k['platid']], [ 'data-confirm' => '确认删除?' ])?>
                </div>
                <div class="xh2" id="lbchulai<?= $i?>" onclick="lbchu1(<?= $i?>)" style="cursor: pointer;">加载全部</div>
            </div>
            <div class="lb" id="lb<?= $i?>" style="display: none;">
                <ul>
                    <?php foreach ($result['account'] as $k1){
                        if($k['platid']==$k1['platid'] && $k1['acctype']==1){
                            ?>
                            <li>
                                <div class="fl">管理员账号: <?= $k1['number']?></div>
                                <div class="mima">管理员密码:<?= $k1['password']?></div>
                                <div class="shanchu" >
                                    <?=Html::a('删除人员', ['site/delete_acc', 'accid' => $k1['accid']], [ 'data-confirm' => '确认删除?' ])?>
                                </div>
                            </li>

                        <?php } } ?>

                    <?php foreach ($result['account'] as $k1){
                        if($k['platid']==$k1['platid'] && $k1['acctype']==2){
                            ?>
                            <li>
                                <div class="fl">操作员账号:<?= $k1['number']?></div>
                                <div class="mima">操作员密码:<?= $k1['password']?></div>
                                <div class="shanchu" >
                                    <?=Html::a('删除人员', ['site/delete_acc', 'accid' => $k1['accid']], [ 'data-confirm' => '确认删除?' ])?>

                                </div>
                            </li>
                        <?php } } ?>
                    <?php foreach ($result['url'] as $k1){
                        if($k['platid']==$k1['platid']){
                            ?>
                            <li><?= $k1['notice']?>测试网址: <a target="_Blank" href="<?= $k1['address']?>"><?= $k1['address']?></a></li>
                        <?php }} ?>
                </ul>
            </div>
        </div>
        <?php $i++;} } ?>
    </div>
    <div id="tab2_content" class="tab_css" style="display: none;">
        <?php 
                $i = 1;
                foreach ($result['platform'] as $k){ 
                    if($k['typeid']==2)
                    {
                        foreach ($result['type'] as $v) {
                            if($v['typeid']==2){
                                $link = $v['url'];
                            }
                        }
        ?>
        <div class="zj">
            <div class="ltoubu">
                <div class="xh"><?= $k['platname']?></div>
                <div class="xh1">客户端登录地址:<a target="_blank" href="<?= $link?>"><?= $link?></a></div>
                <div class="tj"><a href="<?= Url::to(['site/addnum','platid'=>$k['platid']])?>">添加人员</a></div>
                <div class="tj"><a href="<?= Url::to(['site/up_date','platid'=>$k['platid']])?>">修改地址</a></div>
                <div class="tj"><a href="<?= Url::to(['site/deleteall','platid'=>$k['platid']])?>">删除客户端</a></div>
                <div class="xh2" id="lbchulai<?= $i?>" onclick="lbchu2(<?= $i?>)" style="cursor: pointer;">加载全部</div>
            </div>

            <div class="lb1" id="lb_<?= $i?>" style="display: none;">
                <ul>

                    <?php foreach ($result['account'] as $k1){
                        if($k['platid']==$k1['platid'] && $k1['acctype']==1){
                            ?>
                            <li>
                                <div class="fl">
                                    管理员账号:<?= $k1['number']?>
                                </div>
                                <div class="mima">
                                    管理员密码:<?= $k1['password']?>
                                </div>
                                <div class="shanchu" >
                                    <a href="<?= Url::to(['site/delete_acc','accid'=>$k1['accid']])?>">删除人员</a>
                                </div>
                            </li>
                        <?php } } ?>

                    <?php foreach ($result['account'] as $k1){
                        if($k['platid']==$k1['platid'] && $k1['acctype']==2){
                            ?>
                            <li>
                                <div class="fl">
                                    操作员账号:<?= $k1['number']?></div><div class="mima">操作员密码:<?= $k1['password']?>
                                </div>
                                <div class="shanchu" >
                                    <a href="<?= Url::to(['site/delete_acc','accid'=>$k1['accid']])?>">删除人员</a>
                                </div>
                            </li>
                        <?php } } ?>
                    <?php foreach ($result['url'] as $k1){
                        if($k['platid']==$k1['platid']){
                            ?>
                            <li><div><?= $k1['notice']?>测试网址: <a target="_Blank" href="<?= $k1['address']?>"><?= $k1['address']?></a></div></li>
                        <?php }} ?>
                </ul>
            </div>
        </div>
        <?php $i++;} } ?>
    </div>
    <button class="gototop"><span>返回顶部</span></button>
</div>




    <script src="/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="/js/jquery.gototop.min.js"></script>
    <script type="text/javascript">
    $(function() {
        // $(".gototop").gototop();
        $(".gototop").gototop({
            position: 0,
            duration: 1250,
            visibleAt: 300
        });
    });
    </script>

<script type="text/javascript">  
            var myclick = function(v) {  
                var llis = document.getElementById("tab_bar").getElementsByClassName("biaoti");  
                for(var i = 0; i < llis.length; i++) {  
                    var lli = llis[i];  
                    if(lli == document.getElementById("tab" + v)) {  
                        lli.style.backgroundColor = "#46c6df"; 
                        lli.style.color = "#fff"; 
                    } else {  
                        lli.style.backgroundColor = "";  
                        lli.style.color = "#000"; 
                    }  
                }  
  
                var divs = document.getElementsByClassName("tab_css");  
                for(var i = 0; i < divs.length; i++) {  
  
                    var divv = divs[i];  
  
                    if(divv == document.getElementById("tab" + v + "_content")) {  
                        divv.style.display = "block";  
                    } else {  
                        divv.style.display = "none";  
                    }  
                }  
  
            }  
        </script> 
<script>
function lbchu1(i)
{
    lb1=document.getElementById("lb"+i);
    lbchulai1=document.getElementById("lbchulai"+i);
    if(lb1.style.display=="none")
    {
        lb1.style.display="block";
        lbchulai1.style.backgroundImage="url(../img/jianhao.png)";
    }
    else
    {
        lb1.style.display="none";
        lbchulai1.style.backgroundImage="url(../img/jiahao.png)";
    }
}
</script>
<script>
function lbchu2(i)
{
    lb2=document.getElementById("lb_"+i);
    lbchulai2=document.getElementById("lbchulai_"+i);
    if(lb2.style.display=="none")
    {
        lb2.style.display="block";
        lbchulai2.style.backgroundImage="url(../img/jianhao.png)";
    }
    else
    {
        lb2.style.display="none";
        lbchulai2.style.backgroundImage="url(../img/jiahao.png)";
    }
}
</script>

