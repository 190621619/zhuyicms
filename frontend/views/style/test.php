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
        <link rel="stylesheet" href="css/style_test.css" />
        <link rel="stylesheet"  href="css/iconfont.css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/touch-0.2.14.min.js" ></script>
        <script type="text/javascript"  src="js/gloab.js"></script>
        <script type="text/javascript"  src="js/style_test.js"></script>
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

            <div class="out_true_box">
                <div class="out_true">
                    <div class="out_true_top">确认退出登录？</div>
                    <div class="out_true_bott">
                        <span class="quxiao">取消</span>
                        <a href="<?php echo Url::toRoute('/user/loginout'); ?>"><span class="queding">确定</span></a>

                    </div>
                </div>
            </div>

            <section class="style_box">


                <div class="style_here active" nuber="1">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">风格</span>
                             <span class="top_right"><i class="pro_number">1</i><i>/14</i></span>
                             <div>关于自己日日相伴的家，<br> 应该没有人会比你更清楚自己想要什么吧。那么，</div>
                             <span>你希望你的家装在风格上更接近下面哪张图片呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="4a7a8a9"><img src="img/problem/1-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">经典</div></div>
                    <div class="here_div" tetel="2a6"><img src="img/problem/1-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">融合</div></div>
                    <div class="here_div" tetel="1a3a5a10"><img src="img/problem/1-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">当代</div></div>
                </div>

                <div class="style_here" nuber="2">
                   <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">色彩多少</span>
                             <span class="top_right"><i class="pro_number">2</i><i>/14</i></span>
                             <div>不可否认，色彩帮助我们奠定了家的基调，<br>它既可以冷静地安抚我们的焦虑，<br>亦能够热情地激发我们的活力。</div>
                             <span>关于空间的色彩，你更心仪的会是以下哪一种呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="1a5a10"><img src="img/problem/2-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">素颜</div></div>
                    <div class="here_div" tetel="2a3a4"><img src="img/problem/2-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适中</div></div>
                    <div class="here_div" tetel="6a7a8a9"><img src="img/problem/2-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">色彩缤纷</div></div>
                </div>

                <div class="style_here" nuber="3">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">空间</span>
                             <span class="top_right"><i class="pro_number">3</i><i>/14</i></span>
                             <div>爱收藏的恋物癖？<br> 还是“断舍离”的拥趸者？<br> 你对“物”的态度决定了你的空间状态。 </div>
                             <span>从“填满”到“留白”，你的选择会是什么？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="1a2a5a7a10"><img src="img/problem/3-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">填满</div></div>
                    <div class="here_div" tetel="3a4a6a9"><img src="img/problem/3-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适中</div></div>
                    <div class="here_div" tetel="8"><img src="img/problem/3-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">留白</div></div>
                </div>

                <div class="style_here" nuber="4">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">饰品图案</span>
                             <span class="top_right"><i class="pro_number">4</i><i>/14</i></span>
                             <div>图纹、花样还有肌理常常是软装为家赋予的“表情"，</div>
                             <span>而你喜欢的表情会是以下哪种？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="7a8a4"><img src="img/problem/4-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">纯色块</div></div>
                    <div class="here_div" tetel="9a2"><img src="img/problem/4-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">两者兼具</div></div>
                    <div class="here_div" tetel="1a3a5a6a10"><img src="img/problem/4-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">图案</div></div>
                </div>

                <div class="style_here" nuber="5">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">线条</span>
                             <span class="top_right"><i class="pro_number">5</i><i>/14</i></span>
                             <div>家具的线条是勾勒空间的重要“笔触”，<br> 可以表现出一个家的风骨。 </div>
                             <span>而你钟意的家具轮廓是以直线为主，还是以曲线为主？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="1a3a6"><img src="img/problem/5-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">直线</div></div>
                    <div class="here_div" tetel="4a8a9"><img src="img/problem/5-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">柔曲线</div></div>
                    <div class="here_div" tetel="2a5a7a10"><img src="img/problem/5-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">古典曲线</div></div>
                </div>

                <div class="style_here" nuber="6">
                    <div class="gloab_top">
                         <div class="top_bottom"><span class="top_bottom_title">色彩搭配</span>
                             <span class="top_right"><i class="pro_number">6</i><i>/14</i></span>
                             <div> 我们猜测，着装时偏好的色彩搭配，<br> 你大概也会沿用到你的家里吧。 </div>
                             <span>而以下哪一种色彩搭配的空间才会入你的"法眼"呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="5a9a10"><img src="img/problem/6-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">同色系</div></div>
                    <div class="here_div" tetel="2a3a6a4a8a7"><img src="img/problem/6-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适中</div></div>
                    <div class="here_div" tetel="1"><img src="img/problem/6-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">鲜明对比</div></div>
                </div>

                <div class="style_here" nuber="7">
                    <div class="gloab_top">
                         <div class="top_bottom"><span class="top_bottom_title">照明</span>
                             <span class="top_right"><i class="pro_number">7</i><i>/14</i></span>
                             <div> 在家装过程中常会被人忽略的照明设计，<br> 却是建筑师、室内设计师们最关注的问题之一。<br> 不夸张的说，照明是空间的“底妆”。</div>
                             <span>那么，以下哪一种照明方式最接近你期待中的空间“底妆”呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="2a9a3a5"><img src="img/problem/7-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">直接照明</div></div>
                    <div class="here_div" tetel="1a4a10a6"><img src="img/problem/7-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适中</div></div>
                    <div class="here_div" tetel="8a7"><img src="img/problem/7-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">间接照明</div></div>
                </div>

                <div class="style_here" nuber="8">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">主要材质</span>
                             <span class="top_right"><i class="pro_number">8</i><i>/14</i></span>
                             <div>你无法否认，从不同材料身上，你常常可以捕捉到许多不同的情绪。<br> 材料甚至是设计师表达创作的一种语言。</div>
                             <span>那么，你最喜欢的材料是哪些呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="3a5a9"><img src="img/problem/8-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">自然（毛，木，石子）</div></div>
                    <div class="here_div" tetel="1a2a4a7"><img src="img/problem/8-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适度加工（皮，大理石，编织物）</div></div>
                    <div class="here_div" tetel="10a8a6"><img src="img/problem/8-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">人造合成（钢，玻璃，水泥）</div></div>
                </div>

                <div class="style_here" nuber="9">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">布料</span>
                             <span class="top_right"><i class="pro_number">9</i><i>/14</i></span>
                             <div> 家装需要“看”，更需要“摸”。</div>
                             <span>在软装材料上，你会喜欢哪种手感的材质？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="8a6"><img src="img/problem/9-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">粗质（稻草编织，粗毛）</div></div>
                    <div class="here_div" tetel="4a7a9a10"><img src="img/problem/9-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">适中（棉等纺织物）</div></div>
                    <div class="here_div" tetel="1a2a3a5"><img src="img/problem/9-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">细腻（丝绸，绒毛）</div></div>

<!--                    <div class="bot_nac"><span class="nac_a"><a href="choose_style.html">直接选择风格</a></span><span class="nac_b"><a href="#">我有商业空间</a></span></div>
                    -->
                </div>

                <div class="style_here" nuber="10">
                    <div class="gloab_top">
                        <div class="top_bottom"><span class="top_bottom_title">度假地点</span>
                             <span class="top_right"><i class="pro_number">10</i><i>/14</i></span>
                             <div> 旅行改变了我们的视野。</div>
                             <span>在你心目中最理想的假期目的地会是哪里呢？</span>
                        </div>
                    </div>
                    <div class="here_div" tetel="2a5a"><img src="img/problem/10-1.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">郊游</div></div>
                    <div class="here_div" tetel="1a6a10"><img src="img/problem/10-2.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">探索都市</div></div>
                    <div class="here_div" tetel="3a4a8a9a7"><img src="img/problem/10-3.jpg"/><div class="here_div_bota"></div><div class="here_div_botb">博物馆</div></div>
                </div>
            </section>
        </div>
    </body>
</html>