<?php

use yii\helpers\Url;

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
        <script type="text/javascript" src="js/jquery.easy-pie-chart.js" ></script>
        <script type="text/javascript" src="js/style_report.js" ></script>
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
            <div class="down_right_zd"></div> 
            <span class="report_center center_name">Hi KIVEN</span>
            <span class="report_center">你的风格</span>
            <div class="ratio_box">
                <div class="chart">
                    <div class="percentage-light" data-percent="45"><span>45</span>%</div>
                    <div class="label"><a href="#maodiana">现代简约</a></div>
                </div>
                <div class="chart">
                    <div class="percentage-light" data-percent="35"><span>35</span>%</div>
                    <div class="label"><a href="#maodianb">北欧风情</a></div>
                </div>
                <div class="chart">
                    <div class="percentage-light" data-percent="20"><span>20</span>%</div>
                    <div class="label"><a href="#maodianc">中式风格</a></div>
                </div>
            </div>
            <div class="report_big">
                <div class="report_here" id="maodiana">
                    <span class="re_here_title">北欧风情</span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                        对于家的定义你是个典型的实用主义分子。兴起于20世纪二、三十年代的现代派风格，会让你收货更多家的灵感。冗赘的装饰花线让你觉得多余。
                    </div>
                </div>
                <div class="report_here" id="maodianb">
                    <span class="re_here_title">北欧风情</span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                        对于家的定义你是个典型的实用主义分子。兴起于20世纪二、三十年代的现代派风格，会让你收货更多家的灵感。冗赘的装饰花线让你觉得多余。
                    </div>
                </div>
                <div class="report_here"  id="maodianc">
                    <span class="re_here_title">北欧风情</span>
                    <img src="img/home_page/1.jpg" />
                    <div class="report_mesg">
                        对于家的定义你是个典型的实用主义分子。兴起于20世纪二、三十年代的现代派风格，会让你收货更多家的灵感。冗赘的装饰花线让你觉得多余。
                    </div>
                </div>
            </div>

            <a href="demand_problem.html"><div class="tj_btn">提交需求</div></a>
        </div>
    </body>
</html>