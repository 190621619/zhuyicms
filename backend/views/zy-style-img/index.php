<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use dosamigos\datepicker\DatePicker;

?>
<script type="text/javascript" src="/js/ajaxfileupload.js" ></script>
<h2>
    风格测试管理图片
    <small>Preview</small>
</h2>
<div class="row">

    <?php
    foreach ($styleRes as $k => $v) {
        ?>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?php echo $v; ?>
                        <button type="button" class="btn  btn-success btn-flat" onclick="$('#upload<?php echo $k; ?>').click();">
                            添加图片
                        </button>                   
                        <input type="file"  accept="image/*" name="upload<?php echo $k; ?>" id="upload<?php echo $k; ?>" style="display: none" onchange="ajaxFileUpload('upload<?php echo $k; ?>', '<?php echo $k; ?>')">

                    </h3>
                </div>
                <!-- /.box-header -->

                <div class="row" id="imgHtml<?php echo $k; ?>">
                    <?php
                    if (!empty($allRes[$k])) {
                        foreach ($allRes[$k] as $ak => $av) {
                            ?>
                            <div class="col-lg-4">
                                <img class="img-thumbnail" src="http://zhuyihome.com/<?php echo $av['img_url']; ?>" data-holder-rendered="true" style="width: 140px; height: 140px;">
                                <div class="box-tools del" _v="<?php echo $av['id']; ?>">
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    <?php } ?>

</div>    
<script type="text/javascript">
    var _uploadUrl = "<?= yii\helpers\Url::to(['zy-style-img/add']); ?>";
    var _delUrl = "<?= yii\helpers\Url::to(['zy-style-img/del']); ?>";

    function ajaxFileUpload(fileName, sId) {
        $.ajaxFileUpload({
            url: _uploadUrl + '?sId=' + sId, //用于文件上传的服务器端请求地址
            secureuri: false, //是否需要安全协议，一般设置为false
            fileElementId: fileName, //文件上传域的ID
            dataType: 'json', //返回值类型 一般设置为json
            success: function (data, status) //服务器成功响应处理函数
            {
                var src = data.msg;
                if (data.code != 1) {
                    alert(data.msg);
                } else {
                    $('#imgHtml' + sId).append('<div class="col-lg-4">' +
                            '<img class="img-thumbnail" src="http://zhuyihome.com/' + data.msg.imgurl + '" data-holder-rendered="true" style="width: 140px; height: 140px;">' +
                            '<div class="box-tools del" _v="' + data.msg.id + '">' +
                            '<i class="fa fa-times"></i>' +
                            '</div>' +
                            '</div>');
                    del();
                }
            },
            error: function (data, status, e) //服务器响应失败处理函数
            {
                console.log(data);
            }
        })
        return false;
    }

    function del() {
        $('.del').click(function () {
            var me = $(this);
            var _id = $(this).attr('_v');
            $.post(_delUrl, {id: _id}, function (rs) {
                me.parent().hide(500, function () {
                    me.parent().remove();
                });
            });
        });
    }

    del();
</script>
