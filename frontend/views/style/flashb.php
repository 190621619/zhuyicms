<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>风格结果</title>
                <link rel="stylesheet" href="http://at.alicdn.com/t/font_1476711409_6625533.css" />

        <link rel="stylesheet" href="css/jg.css" />
        <link rel="stylesheet" href="css/flash_b.css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/gloaba.js" async="async"></script>
    </head>
    <body>
        <div class="desib_box">
            <div class="miaoshu">
                <span class="miaoshu_name"><?php echo $userInfo['nickname'] ?></span>
                <span>你复古时尚，</span>
                <span>是摩登时期的缅怀者，</span>
                <span>是擅用经典的创想家，</span>
                <span>你最喜爱的风格是——</span>
                <span class="text_big">中古风格</span>
            </div>
            <span class="logo iconfont icon-chusheng01"></span>
            <div class="desi_top"></div>
            <div class="desi_bottom"></div>
            <img class="des_img des_imga" src="img/flash_b/1.png" />
            <img class="des_img des_imgb" src="img/flash_b/2.png" />
            <img class="des_img des_imgc" src="img/flash_b/2.png" />
            <img class="des_img des_imgd" src="img/flash_b/4.png" />
            <img class="des_img des_imge" src="img/flash_b/5.png" />
            <img class="des_img des_imgf" src="img/flash_b/6.png" />
            <img class="des_img des_imgg" src="img/flash_b/7.png" />
            <img class="des_img des_imgh" src="img/flash_b/8.png" />
            <img class="des_img des_imgi" src="img/flash_b/9.png" />
            <img class="des_img des_imgj" src="img/flash_b/10.png" />
            <img class="des_img des_imgk" src="img/flash_b/11.png" />
            <img class="des_img des_imgl" src="img/flash_b/12.png" />
            <img class="des_img des_imgp_c" src="img/flash_b/15.png" />
            <img class="des_img des_imgp_d" src="img/flash_b/13.png" />
            <img class="des_img des_imgyfa" src="img/flash_b/2-6.png" />
            <img class="des_img des_imgyfb" src="img/flash_b/2-5.png" />
            <img class="des_img des_imgyfc" src="img/flash_b/2-4.png" />
            <img class="des_img des_imgyfd" src="img/flash_b/2-3.png" />
            <img class="des_img des_imgyfe" src="img/flash_b/2-2.png" />
            <img class="des_img des_imgyff" src="img/flash_b/2-1.png" />

            <div class="miaodian_mesng miaodiana_a">
                <div class="sanjiao_box">
                    <span class="iconfont maodian_icon icon-sibianxing"></span>

                    <div class="sanjiao"></div>
                    <div class="click_m"></div>
                </div>
                <div class="miaodian_text">
                    <span class="text_title">温暖色调</span>
                    欢快的色调会在空间中产生温暖的感觉，一些略带夸张的色彩彼此映衬，甚至还可以造成出乎意料的迷人效果。
                </div>
            </div>


            <div class="miaodian_mesng miaodiana_b">
                <div class="sanjiao_box">
                    <span class="iconfont maodian_icon icon-sibianxing"></span>
                    <div class="sanjiao"></div>
                    <div class="click_m"></div>
                </div>
                <div class="miaodian_text">
                    <span class="text_title">温暖色调</span>
                    欢快的色调会在空间中产生温暖的感觉，一些略带夸张的色彩彼此映衬，甚至还可以造成出乎意料的迷人效果。
                </div>
            </div>


            <div class="miaodian_mesng miaodiana_c">
                <div class="sanjiao_box">
                    <span class="iconfont maodian_icon icon-sibianxing"></span>
                    <div class="sanjiao"></div>
                    <div class="click_m"></div>
                </div>
                <div class="miaodian_text">
                    <span class="text_title">复古范儿的饰品</span>
                    打造中古风格，来自摩登时代的各种物件可谓是“点睛之笔”。一经它们的点缀，家中立即就多了几分年代感。
                </div>
            </div>

            <div class="miaodian_mesng miaodiana_d">
                <div class="sanjiao_box">
                    <span class="iconfont maodian_icon icon-sibianxing"></span>
                    <div class="sanjiao"></div>
                    <div class="click_m"></div>
                </div>
                <div class="miaodian_text">
                    <span class="text_title">经典款家具</span>
                    进入现代主义初期的经典款家具是用来创造中古风的最佳选择，体现在它们身上的美感完美诠释了“Timeless”。
                </div>
            </div>

            <div class="miaodian_mesng miaodiana_e">
                <div class="sanjiao_box">
                    <span class="iconfont maodian_icon icon-sibianxing"></span>
                    <div class="sanjiao"></div>
                    <div class="click_m"></div>
                </div>
                <div class="miaodian_text">
                    <span class="text_title">抽象线条和几何形体</span>
                    受到上世纪60年代构成主义影响的家居环境少不了以各种点、线、面为基本元素与抽象的几何形体来进行组合。
                </div>
            </div>
        </div>
        <?php
        if (isset($frindf) && !empty($frindf)) {
            
            ?>
            <div class="share_box share_box_b share_box_active">
                <a href="<?php echo Url::toRoute(['/style/index','link_id'=>$link_id]);?>"><span class="share_btn">开始自己的风格测试</span></a>
            </div>

        <?php } else { ?>
            <div class="share_box share_box_active">
                <span class="share_btn">分享给你的小伙伴，看看谁跟你有一样的品味</span>
                <div class="cs_more"><a href="<?php echo Url::toRoute('/style/index'); ?>"><span class="more_a">再测一次</span></a><a href="<?php echo Url::toRoute('/style/chosestyle'); ?>"><span class="more_b">查看其它风格</span></a></div>
            </div>
        <?php } ?>
         <div class="gloab_bottm">
            <img class="erweima" src="img/ewm/2.png"  />
            <div class="bottm_mesg">想观看和你风格类似的住艺家吗？<br>请扫描上方二维码进入我们的公众号</div>

            <span class="by_ad iconfont icon-logo01"></span>
        </div>
    </body>
</html>
<?php
//var_dump($mystyle['style']);exit;
$sharelogo = '';
switch ($mystyle['style']){
case '波西米亚':
    $sharelogo = '/img/fenggejieguo/boximiya.png';
    break;
case '中古':
    $sharelogo = '/img/fenggejieguo/zhonggu.png';
    break;
case '法式古典':
    $sharelogo = '/img/fenggejieguo/fashigudian.png';
    break;
case '工业':
    $sharelogo = '/img/fenggejieguo/gongye.png';
    break;
case '美式':
    $sharelogo = '/img/fenggejieguo/meishi.png';
    break;
case '和式':
    $sharelogo = '/img/fenggejieguo/heshi.png';
    break;
case '现代简约':
    $sharelogo = '/img/fenggejieguo/xiandaijianyue.png';
    break;
case '新中式':
    $sharelogo = '/img/fenggejieguo/xinzhongshi.png';
    break;
default :
    $sharelogo = '/img/fenggejieguo/xinzhongshi.png';
        
}
?>
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
            title: '这个测试说我很<?=$mystyle['style']?>', // 分享标题
            desc: '在某种意义上,「家」就等于你,可是你真的懂自己?1分钟完成这14道测试题,找到最适合 你的家居风格。', // 分享描述
            link: "<?php echo Yii::$app->params['frontDomain']; ?>" + '/index.php?r=style/report&link_id=' + "<?= $link_id ?>", // 分享链接

            imgUrl: "<?php echo Yii::$app->params['frontDomain'] ?>" + '<?=$sharelogo ?>', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('已分享!');
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
            title: '这个测试说我的品位很<?=$mystyle['style']?>...1分钟14道题,看看你对「家」的态度', // 分享标题
            link: "<?php echo Yii::$app->params['frontDomain']; ?>" + '/index.php?r=style/report&link_id=' + "<?= $link_id ?>", // 分享链接

            imgUrl: "<?php echo Yii::$app->params['frontDomain'] ?>" + '<?=$sharelogo ?>', // 分享图标

            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功!');
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

