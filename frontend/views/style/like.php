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
        <title>风格测试</title>
        <link rel="stylesheet" href="css/gloab.css" />
        <link rel="stylesheet" href="css/style_like.css" />
        <link rel="stylesheet"  href="http://at.alicdn.com/t/font_bwklkrm5b691kyb9.css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/touch-0.2.14.min.js" ></script>
        <script type="text/javascript"  src="js/gloab.js"></script>
        <script type="text/javascript"  src="js/style_like.js"></script>
    </head>
    <body>
        <div class="style_text_boxs">
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
            <div class="like_box">
               <div class="banner">
				<div class="like_title">你最喜欢以下哪一种风格</div>
			<div class="banner_bottom"></div>
			</div>
                <div class="like_box">
                    <?php foreach ($styleArr as $v){
     foreach ($v as $img){
         
         echo ' <div class="like_here" newstr="'.$img['style_id'].'">
                        <img src="'.$img['img_url'].'"  />
                    </div>';
     }
                    }    ?>
                    <div class="like_here" newstr="2">
                        <img src="img/style_like/ad_a.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_b.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_c.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_d.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_b.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_c.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_a.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_b.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_c.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_a.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_b.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_c.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_a.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_b.jpg"  />
                    </div>
                    <div class="like_here">
                        <img src="img/style_like/ad_c.jpg"  />
                    </div>
                </div>

            </div>
            <div class="like_bottom">
                <div class="btnnnn">请至少勾选三个选项</div>
            </div>
        </div>
    </body>
</html>
