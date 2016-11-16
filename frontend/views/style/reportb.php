<?php

use yii\helpers\Url;

$uc = new common\util\Guolu();

$session = Yii::$app->session;
if (!$session->isActive) {
    $session->open();
}
$_cookieSts = \common\controllers\BaseController::checkLoginCookie();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>风格报告</title>
        <link rel="stylesheet" href="css/gloab.css" />
        <link rel="stylesheet" href="css/style_report.css" />
        <link rel="stylesheet"  href="css/iconfont.css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/touch-0.2.14.min.js" ></script>
        <script type="text/javascript" src="js/gloab.js" ></script>
<!--        <script type="text/javascript" src="js/jquery.easy-pie-chart.js" ></script>-->
        <script type="text/javascript" src="js/jquery.circliful.min.js" ></script>
        <script type="text/javascript" src="js/style_report.js" ></script>
        <script>
            $(function () {
                var get_url = getUrlParam("get_str");
                gethahah(get_url);
                $('.gett').circliful();

            });
        </script>
    </head>
    <body>
        <div class="report_box">
            <header class="header_top iconfont icon-logo">
                    <!--<input id="ipt" type="text" value="0" />-->
                <span class="top_right iconfont icon-gongneng"></span>
            </header>
            <section class="down_right">
                <ul>
                    <li><a href="<?php echo Url::toRoute('/index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo Url::toRoute('/designer/list'); ?>">住艺设计师</a></li>
                    <li><a href="<?php echo Url::toRoute('/zyzhinan/guide'); ?>">设计指南</a></li>
                    <li><a href="<?php echo Url::toRoute('/order/list'); ?>">我的住艺</a></li>
                    <li><a href="<?php echo Url::toRoute('/user/feedback'); ?>">更多建议</a></li>
                    <li>   <?php if ($session->get('user_id')) { ?>
                            <a abc="<?php echo Url::toRoute('/user/loginout'); ?>">暂时登出</a>

                        <?php } else { ?>

                            <a href = "<?php echo Url::toRoute('/user/login'); ?>">立即登录</a>

                        <?php }; ?>

                    </li>
                </ul>
            </section>
            <?php
            $username = '';
            if (isset($ukname) && !empty($ukname)) {
                $username = $ukname;
            } else {
                if (isset($user) && !empty($user)) {
                    if (isset($user['nickname']) && !empty($user['nickname'])) {
                        $username = $user['nickname'];
                        $username = $uc->userTextDecode($username);
                    } else {
                        $username = $user['phone'];

                        $username = substr_replace($username, '****', 3, 4);
                    }
                }else{
                    $username = ' 游客';
                }
            }
            ?>
            <div class="down_right_zd"></div> 
            <span class="report_center center_name">Hi <?= $username ?></span>
            <span class="report_center">你的风格</span>
            <div class="ratio_box">
                <div class="chart">
                    <div id="myStat2" class="gett" data-dimension="300" data-text="35%"  data-width="30" data-fontsize="38" data-percent="35" data-fgcolor="#61a9dc" data-bgcolor="#eee"></div>
                </div>
                <div class="chart">
                    <div id="myStat2" class="gett" data-dimension="300" data-text="35%"  data-width="30" data-fontsize="38" data-percent="35" data-fgcolor="#61a9dc" data-bgcolor="#eee"></div>
                </div>
                <div class="chart">
                    <div id="myStat2" class="gett" data-dimension="300" data-text="35%"  data-width="30" data-fontsize="38" data-percent="35" data-fgcolor="#61a9dc" data-bgcolor="#eee"></div>
                </div>
            </div>
            <div class="report_big">
                <div class="report_here" id="maodiana">
                    <span class="re_here_title"></span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                    </div>
                </div>
                <div class="report_here" id="maodianb">
                    <span class="re_here_title"></span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                    </div>
                </div>
                <div class="report_here"  id="maodianc">
                    <span class="re_here_title"></span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                    </div>
                </div>
            </div>
            <?php
            switch ($button) {
                case 1:
                    ?>
                    <a href="<?php echo Yii::getAlias('@web') . '/index.php?r=project/choose_designer'; ?>"><div class="tj_btn">匹配设计师</div></a>


                    <?php
                    break;
                    ;
                case 2:
                    ?>
                    <a href="<?php echo Yii::getAlias('@web') . '/index.php?r=order/list'; ?>"><div class="tj_btn">查看订单</div></a>

                    <?php
                    break;
                case 3:
                    ?>
                    <a href="<?php echo Yii::getAlias('@web') . '/index.php?r=project/match_designer'; ?>"><div class="tj_btn">找设计师</div></a>

                    <?php
                    break;
            }
            ?>
        </div>
    </body>
</html>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script type="text/javascript">

            wx.config({
                debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                appId: 'wx8f50ac309b04acf8', // 必填，公众号的唯一标识
                timestamp: <?= $jsarr['timestamp'] ?>, // 必填，生成签名的时间戳
                nonceStr: 'zhuyi', // 必填，生成签名的随机串
                signature: "<?= $jsarr['signature'] ?>", // 必填，签名，见附录1
                jsApiList: ['onMenuShareAppMessage', 'onMenuShareTimeline', 'checkJsApi', 'chooseImage', 'uploadImage', 'downloadImage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
            });
            //定义images用来保存选择的本地图片ID，和上传后的服务器图片ID

            wx.ready(function () {

                wx.checkJsApi({
                    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'checkJsApi', 'chooseImage', 'uploadImage', 'downloadImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                    success: function (res) {
                        // 以键值对的形式返回，可用的api值true，不可用为false
                        // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
                    }
                });

                //分享给朋友
                wx.onMenuShareAppMessage({
                    title: '并向你扔了一枚牛头', // 分享标题
                    desc: '看看你对「家」的态度,如果你和我的测试结果相同,两人都将有机会得到HAY的七巧板拼盘一套。', // 分享描述
                    link: "<?php echo Yii::$app->params['frontDomain']; ?>" + '/index.php?r=style/reportb&get_str=' + "<?= $get_str ?>" + '&ukname=' + "<?= $username ?>" + '&isshare=1', // 分享链接

                    imgUrl: "<?php echo Yii::$app->params['frontDomain'] ?>" + '<?php ?>', // 分享图标
                    type: '', // 分享类型,music、video或link，不填默认为link
                    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                    success: function () {
                        // 用户确认分享后执行的回调函数
                        // alert('分享成功！再次点开你分享的链接可查看你朋友的结果。');tj_ajax(6,6037,"","","分享次数");
                    },
                    cancel: function () {
                        // 用户取消分享后执行的回调函数
                    },
                    fail: function (res) {
                        alert(JSON.stringify(res));
                    }
                });

                //分享到朋友圈
                wx.onMenuShareTimeline({
                    title: '居风格是什么', // 分享标题
                    link: "<?php echo Yii::$app->params['frontDomain']; ?>" + '/index.php?r=style/report&link_id=' + "<?php ?>", // 分享链接

                    imgUrl: "<?php echo Yii::$app->params['frontDomain'] ?>" + '<?php ?>', // 分享图标

                    success: function () {
                        // 用户确认分享后执行的回调函数
                        // alert('分享成功！再次点开你分享的链接可查看你朋友的结果。');tj_ajax(6,6036,"","","分享次数");
                    },
                    cancel: function () {
                        // 用户取消分享后执行的回调函数
                    },
                    fail: function (res) {
                        alert(JSON.stringify(res));
                    }
                });

            });
</script>
