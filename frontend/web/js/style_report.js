

function gethahah(url_data) {
    var size = parseInt(parseInt($("html").css("font-size")) * 1.2);
    var widtht = parseInt($("html").css("font-size")) * .08;

//    var data_a = ["", "现代简约", "工业风格", "波西米亚风格", "中式风格", "日式风格", "Art Deco", "北欧风格", "中古风格", "美式风格", "法式古典风格"];
    url_data = url_data.split("$");
    var new_data = [];
    var report = [
        ["现代简约", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["工业风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["波西米亚风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["中式风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["日式风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["Art Deco", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["北欧风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["中古风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["美式风格", "img/home_page/1.jpg", "这是现代简约的描述"],
        ["法式古典风格", "img/home_page/1.jpg", "这是现代简约的描述"],
    ]
    var number = 0;
    for (var i = 0; i < url_data.length - 1; i++) {
        new_data.push(url_data[i].split(","));
//            new_data[i][0]=data_a[parseInt(new_data[i][0])];
        number += parseInt(new_data[i][1]);

    };
    $(".chart").each(function (index, tree) {
        var numberr = parseInt(new_data[index][1] / number * 100);
        $(this).find(".percentage-light").attr("data-percent", numberr).html(numberr);
        $(this).find(".label a").html(report[index][0]);
    });

    $('.percentage-light').easyPieChart({
        barColor: '#ff4e38',
        trackColor: '#eeefef',
        scaleColor: '#ffffef',
        scaleColor: false,
                size: size,
        lineCap: 'butt',
        lineWidth: 4,
        animate: 1000
    });

    $(".report_big .report_here").each(function (index, arr) {
        $(this).find(".re_here_title").html(report[index][0]);
        $(this).find(">img").attr("src", report[index][1]);
        $(this).find(".report_mesg").html(report[index][2]);
    });
}

function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null)
        return unescape(r[2]);
    return null; //返回参数值
}