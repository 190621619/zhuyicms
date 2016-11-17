

function gethahah(url_data) {
    console.log(url_data);
    var size = parseInt(parseInt($("html").css("font-size")) * 1.2);
    var widtht = parseInt($("html").css("font-size")) * .08;

//    var data_a = ["", "现代简约", "工业风格", "波西米亚风格", "中式风格", "日式风格", "Art Deco", "北欧风格", "中古风格", "美式风格", "法式古典风格"];
    url_data = url_data.split("$");
    var new_data = [];
    var report = [
        ["现代简约", "img/styleimg/现代简约.jpg", "主张功能至上、少既是多的你，对于家的布置是个典型的实用派。冗赘的装饰花线让你觉得多余，分区明确、井然有序的空间规划更让你觉得自在。兴起于20世纪二、三十年代的现代派风格，会让你收获更多家的灵感。对于家的定义，超大吞吐量的储物柜定会让你大呼过瘾。"],
        ["工业风格", "img/styleimg/工业.jpg", "你的理解里，精致并非是家的全部。粗线条的轮廓和浑厚的质地反倒会让你更放松，“不精致”也是时髦的另一种思路。粗糙的清水混凝土、厚拙的麻棉质地，再加上点工业感的铆钉装饰，集聚工业气质的氛围让你更兴奋，18世纪的工业革命，让我们对居住环境有了颠覆式的革新，关于理想的生活空间，你有更宽的包容度，略微性质朴的空间元素，是你心里生活日常的理想布景。"],
        ["波西米亚风格", "img/styleimg/波西米亚.jpg", "对于家的装扮，你丝毫不规避大自然的野性美，正襟危坐的状态可不是你要的，自由无束的日常是家的重心，随性、自在、奔放，迎合了你充满艺术嬉皮的居住需求，把自在的田野生活搬回家是你的初衷。相比精心的纺织，独出机杼的鲜艳手工装饰和粗旷厚重的面料更容易俘获你的心。波希米亚风格的空间少了现代主义严谨的冷漠，多了分随性与亲切。"],
        ["中式风格", "img/styleimg/中式.jpg", "比起西方现代主义功能至上的理论，你更青睐传统的中式的生活美学，对家的需求你皈依自然的平衡之道，四平八稳、阴阳协作的中式布局哲学会让你住得更舒坦，考究的用料以及精工细作的榫卯结构更打动你的心，木质、棉麻，无添加的传统手工随时随刻传达出生活美妙。"],
        ["日式风格", "img/styleimg/日式.jpg", "无添加的日式生活美学渗透到你生活的每一个细节。皈依自然、物尽其用、地尽其利简单、朴实、平常的风格最应你的心思。在你看来，每日所伴的器物并非只满足“用”，更应在意每一个使用者的习惯和磨合，而家的陪伴不仅只是个落脚点那么简单。"],
        ["Art Deco", "img/styleimg/ArtDeco.jpg", "你认为时髦和摩登不仅体现在衣着装扮，更应在家的布置上大胆尝试，而堪称现代“爵士”的ArtDeco装饰艺术风格正中你的心。重线条的特点自带强烈的流行装饰气质，造作的金色线条大胆出位，但又不夸张，细腻的丝绒更添质感。"],
        ["北欧风格", "img/styleimg/北欧.jpg", "矫情但又不造作，多元而又包容，在自然中追寻人工的秩序美是北欧风格的迷人之处，正如那些北欧派系的家具，拥抱机器的精工打造，但又尊重材质原本的样貌。没错，你更钟情于来自斯堪的纳维亚的生活方式，实用有时髦，性价比高，精致得一点儿都不造作。"],
        ["中古风格", "img/styleimg/中古.jpg", "你认为有一种美，叫做时间，那些极简形式的现代派家具对你来说你觉得太过冷漠，受构成主义影响的20世纪六十年代的家居风格更对你的胃口。钢架构的家具框架，采用欢快色调抽象形式的织物，用自己的方式记录下曾经的美好。对于家的装扮你可是个大胆的先锋派，你敢于尝试夸张的色彩，善用讲究的线条穿插，幽默的装饰小细节让你兴奋。"],
        ["美式风格", "img/styleimg/美式.jpg", "膜拜欧洲中古世纪的贵族生活场景，又想兼顾实用又舒适的现代生活方式，美式的起居生活完美地中和了你的需求，适度的花线装饰让家里的氛围层次丰富，造型饱满的家具撑起家的气场，你更欣赏局部上扬卷曲的鸢尾花桌脚。深陷大尺度宽厚舒适的沙发对你来说就像是一个贴心的拥抱，工作的压力瞬间释放。"],
        ["法式古典风格", "img/styleimg/法式.jpg", "对家的定义你着实是个古典派，所谓的古典可并非是说老派，而是迷恋欧洲中古世纪的贵族的精致生活，就像提及到洛可可并非只是来形容过分装饰的代名词，其实重点是在于形容日常的精巧。丰盈而饱满似雕塑的曲线、色彩斑斓的形式带给你更多兴奋与喜悦。"],
    ]
    var number = 0;
    for (var i = 0; i < url_data.length; i++) {
        new_data.push(url_data[i].split(","));
//            new_data[i][0]=data_a[parseInt(new_data[i][0])];
        number += parseInt(new_data[i][1]);

    };
    $(".chart").each(function (index, tree) {
        var numberr = parseInt(new_data[index][1] / number * 100);
        var _this=$(this);
        var text=report[index][0];
        console.log(text)
        _this.find(".tx").html(numberr+"%");
        _this.find(".title_style").html(text);
        cicleTransform(numberr,100,_this)
    });
    
//    $('.percentage-light').easyPieChart({
//        barColor: '#ff4e38',
//        trackColor: '#eeefef',
//        scaleColor: '#ffffef',
//        scaleColor: false,
//                size: size,
//        lineCap: 'butt',
//        lineWidth: 4,
//        animate: 1000
//    });

    $(".report_big .report_here").each(function (index, arr) {
        $(this).find(".re_here_title").html(report[index][0]);
        $(this).find(">img").attr("src", report[index][1]);
        $(this).find(".report_mesg").html(report[index][2]);
    });
    
    
    
    var cicleTransform = function(num, old_num,_this) {
                            var b_l_a = _this.find(".bar-left-an");
                            var b_r_a = _this.find(".bar-right-an");
                            var c_num = num;
                            if(c_num > 50) {
                                b_r_a.css({
                                    "transform": "rotate(45deg)",
                                    "transition": "transform 1s linear"
                                });
                                setTimeout(function() {
                                    b_l_a.css({
                                        "transform": "rotate(" + (((c_num-50)/100*360)-135) + "deg)",
                                        "transition": "transform 1s linear"
                                    });
                                },1000);
                            } else {
                                if(old_num > 50) {
                                    setTimeout(function() {
                                        b_r_a.css({
                                            "transform": "rotate(" + ((c_num/100*360)-135) + "deg)",
                                            "transition": "transform 1s linear"
                                        });
                                    },1000);
                                    b_l_a.css({
                                        "transform": "rotate(-135deg)",
                                        "transition": "transform 1s linear"
                                    });
                                } else {
                                    b_r_a.css({
                                        "transform": "rotate(" + ((c_num/100*360)-135) + "deg)",
                                        "transition": "transform 1s linear"
                                    });
                                }
                                
                            }
                        }
}

function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null)
        return unescape(r[2]);
    return null; //返回参数值
}

