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
        <title>公装设计</title>
        <link rel="stylesheet" href="css/gloab.css" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/video-js.min.css" />
        <link rel="stylesheet"  href="css/iconfont.css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js" ></script>	
        <script type="text/javascript" src="js/touch-0.2.14.min.js" ></script>
        <script type="text/javascript" src="js/video.min.js" ></script>
        <script type="text/javascript" src="js/gloab.js" ></script>
        <script type="text/javascript" src="js/index.js" ></script>
    </head>
    <body>
        <div class="index_box tools_box">
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

            <div class="out_true_box">
                <div class="out_true">
                    <div class="out_true_top">确认退出登录？</div>
                    <div class="out_true_bott">
                        <span class="quxiao">取消</span>
                        <a href="<?php echo Url::toRoute('/user/loginout'); ?>"><span class="queding">确定</span></a>

                    </div>
                </div>
            </div> 

            <a href="http://form.mikecrm.com/UWcirG"><div class="banner">
                    <img src="img/index/tool_banner.jpg" />
                </div>
            </a>


            <section class="production">
                <div class="pro_title">
                    <span class="titl_span">精品视频
                        <a></a>
                    </span>
                </div>
                <div class="pro_box">
                    <div class="pro_here">
                        <div class="pro_here_bcimg iconfont icon-bofang1">
                            <img class="here_img" src="img/index/yanjia_22.jpg" />
                        </div>
                        <video id="example_video2" class="video-js vjs-default-skin" preload="none" poster="img/index/indexb.jpg">
                            <source src="http://osszhuyi.oss-cn-qingdao.aliyuncs.com/zhuyivideo/yanjiaerhao.mp4" type='video/mp4' />
                        </video>
                        <div class="here_botaa"></div>
                        <div class="here_bottom line_center">
                            <div class="bottom_name" style="display: block; line-height: .88rem; position: initial;">
                                <span class="here_name">燕家二号</span><span class="here_namea">餐厅</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pro_here">
                        <div class="pro_here_bcimg iconfont icon-bofang1">
                            <img class="here_img" src="img/index/haili.jpg" />
                        </div>
                        <video id="example_video2" class="video-js vjs-default-skin" preload="none" poster="img/index/haili.jpg">
                            <source src="http://osszhuyi.oss-cn-qingdao.aliyuncs.com/zhuyivideo/hailigongfang.MP4" type='video/mp4' />
                        </video>
                        <div class="here_botaa"></div>
                        <div class="here_bottom line_center">
                            <div class="bottom_name" style="display: block; line-height: .88rem; position: initial;">
                                <span class="here_name">海狸之家</span><span class="here_namea">办公室</span>
                            </div>
                        </div>
                    </div>
                    
                </div><!--pro_box end-->
            </section><!--production end-->
            <div class="bot_btn_aa">
                <a href="http://form.mikecrm.com/UWcirG"><span>找设计师</span></a>
            </div>
            <section class="nav_bot">

                <span><a href="<?php echo Url::toRoute('zyzhinan/about'); ?>">关于住艺</a></span>
                <span><a href="http://form.mikecrm.com/Dlvnng">设计师入驻</a></span>
                <span><a href="http://mp.weixin.qq.com/s?__biz=MzI1OTIxNjA2OA==&mid=2247484893&idx=3&sn=61ad8cdec4d8fca83cc640324baf0b3a&scene=1&srcid=0714eN73BsxsGBnKEyQTPQFc&from=singlemessage&isappinstalled=0#wechat_redirect">住艺招聘</a></span>
                <span><a href="<?php echo Url::toRoute('index/toolsdesign'); ?>">公装项目</a></span>
            </section><!--nav_bot end-->


            <footer class="foot">
                <span class="foot_a">
                    VIP客服  <a href="tel:4000600636">4000-600-636</a>
                </span>
                <span class="foot_b">
                    京ICP备16029306号
                </span>
            </footer>




        </div>

    </body>
</html>
