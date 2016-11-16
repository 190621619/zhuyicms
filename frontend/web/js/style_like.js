$(function () {
    var new_str = getUrlParam("style");
    var new_json = [];
    console.log(new_str);
    new_str = new_str.split("$");
    for (var i = 0; i < new_str.length - 1; i++) {
        new_str[i] = new_str[i].split(",");
        var arr = {
            "style": new_str[i][1],
            "number": new_str[i][0]
        }
        new_json.push(arr);
    }
    console.log(new_json);
    var click_touch = true;
    var foin_hrm='<div class="like_foin">< img src="img/style_test/top_right.png" /></div>'; touch.on(".like_here", "tap", function (ev) {
        var _this = $(ev.currentTarget);
        if (click_touch) {
            click_touch = false;
            var get = _this.attr("new_str");
            if (_this.hasClass("foinnn")) {
                _this.find(".like_foin").remove();
                _this.removeClass("foinnn");
                for (var i = 0; i < new_json.length; i++) {
                    if (parseInt(new_json[i]["style"]) == get) {
                        if (parseInt(new_json[i]["style"]) == get) {
                            new_json[i]["number"] = (parseInt(new_json[i]["number"]) - 1).toString();
                        }
                    }
                }

            } else {
                _this.append(foin_hrm);
                _this.addClass("foinnn");
                for (var i = 0; i < new_json.length; i++) {
                    if (parseInt(new_json[i]["style"]) == get) {
                        if (parseInt(new_json[i]["style"]) == get) {
                            new_json[i]["number"] = (parseInt(new_json[i]["number"]) + 1).toString();
                        }
                    }
                }
            }
            click_touch = true;
            for (var i in new_json) {
                console.log(new_json[i]["number"]);
            }

        }



        var length = 3 - parseInt($(".foinnn").length);

        if (length <= 0) {
            $(".like_bottom .btnnnn").addClass("active").html("确定");
        } else {
            $(".like_bottom .btnnnn").removeClass("active").html("你至少还需要勾选" + length + "个选项");
        }
    });
    touch.on(".btnnnn", "tap", function () {
        var url_str = "";
        new_json.sort(sortBy('number', false, parseInt));
        new_json = new_json.slice(0, 3);
        for (var i = 0; i < new_json.length; i++) {
            url_str += new_json[i]["style"] + "," + new_json[i]["number"] + "$";
        }
        $.ajax({
            url: "http://zhuyihome.com/index.php?r=style/add&style_report=" + url_str,
            type: "GET",
            data: "",
            async: true,
            success: function (data) {
               // alert(data);
                if (data) {
                    window.location.href = 'http://zhuyihome.com/index.php?r=style/reportb&get_str=' + url_str;
                }
            }
        });
    });
//	$(".like_here").on("click",function(ev){
//		var _this=$(ev.currentTarget);
//		if(click_touch){
//			click_touch=false;
//			var lenght=$(this).find(".like_foin").length;
//			alert(lenght)
//			if(lenght==0){
//				_this.append(foin_hrm);
//			}else{
//				_this.remove(".like_foin");
//			}
//			click_touch=true;
//		}
//	});
});

function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null)
        return unescape(r[2]);
    return null; //返回参数值
}
var sortBy = function (filed, rev, primer) {
    rev = (rev) ? -1 : 1;
    return function (a, b) {
        a = a[filed];
        b = b[filed];
        if (typeof (primer) != 'undefined') {
            a = primer(a);
            b = primer(b);
        }
        if (a > b) {
            return rev * -1;
        }
        if (a < b) {
            return rev * 1;
        }
        return 1;
    }
};