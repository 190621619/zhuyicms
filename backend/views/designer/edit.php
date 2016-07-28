<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use dosamigos\datepicker\DatePicker;

?>
<div class="row">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">编辑设计师基本信息</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?= Html::beginForm('', 'post', ['id' => 'form-basic']); ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="name">姓名</label>
                    <?= Html::activeInput('text', $model, 'name', ['class' => 'form-control','id' => 'name']) ?>
                    <?= Html::error($model, 'name', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="sex">性别</label>
                    <?= Html::activeRadioList($model, 'sex', [1 => '男', 0 => '女'], ['class' => 'fav-list', 'id' => "sex"]) ?>
                    <?= Html::error($model, 'sex', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="name">出生日期</label>
                    <?= Html::activeInput('text', $model, 'birth', ['class' => 'form-control','id' => 'birth']) ?>
                    <?= Html::error($model, 'birth', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="job_year">从业年限</label>
                    <?= Html::activeInput('text', $model, 'job_year', ['class' => 'form-control','id' => 'job_year']) ?>
                    <?= Html::error($model, 'job_year', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="tag">标签</label>
                    <?= Html::activeInput('text', $model, 'tag', ['class' => 'form-control', 'placeholder' => '多标签以英文逗号隔开', 'id' => 'tag']) ?>
                    <?= Html::error($model, 'tag', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="sign">签约状态</label>
                    <?= Html::activeRadioList($model, 'sign', [1 => '已签约', 0 => '未签约'], ['class' => 'fav-list', 'id' => "sign"]) ?>
                </div>

                <div class="form-group">
                    <label for="company">就职机构及职位</label>
                    <?= Html::activeInput('text', $model, 'company', ['class' => 'form-control','id' => 'company']) ?>
                    <?= Html::error($model, 'company', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="ever_office">以往服务的大事务所/设计公司</label>
                   
                    <?= Html::activeTextarea($model, 'ever_office', ['class' => 'form-control', 'rows' => '5', 'id' => 'ever_office']) ?>
                    <?= Html::error($model, 'ever_office', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="alma_mater">毕业院校及专业</label>
                    <?= Html::activeInput('text', $model, 'alma_mater', ['class' => 'form-control','id' => 'alma_mater']) ?>
                    <?= Html::error($model, 'alma_mater', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="winning">获奖经历</label>
                    <?= Html::activeTextarea($model, 'winning', ['class' => 'form-control', 'rows' => '5', 'id' => 'winning']) ?>
                    <?= Html::error($model, 'winning', ['class' => 'error']); ?>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" style='text-align: center;'>
                <button class="btn btn-primary pull-left" type="button"  onclick="ajaxBasic()">提交修改</button>
                <label class="control-label" id="secuss" style="color:#00a65a;margin-top: 5px; display: none;"><i class="fa fa-check"></i> Input with success</label>
                <button class="btn btn-default pull-right" type="reset" onclick="jixu()">重置</button>
            </div>
            <?= Html::endForm(); ?>
        </div>
        <!--设计师附加信息-->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">设计师附加信息表</h3>
            </div>
            <?= Html::beginForm('', 'post', ['id' => 'form-additional']); ?>
            <?= Html::activeHiddenInput($modeladditional, 'designer_id', ['id' => 'id-additional', 'value' => $did]) ?>
            <div class="box-body">

                <div class="form-group">
                    <label for="phone">电话</label>
                    <?= Html::activeInput('text', $modeladditional, 'phone', ['class' => 'form-control','id' => 'phone']) ?>
                    <?= Html::error($modeladditional, 'phone', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="wechat">微信</label>
                    <?= Html::activeInput('text', $modeladditional, 'wechat', ['class' => 'form-control','id' => 'wechat']) ?>
                    <?= Html::error($modeladditional, 'wechat', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="email">邮箱</label>
                    <?= Html::activeInput('email', $modeladditional, 'email', ['class' => 'form-control','id' => 'email']) ?>
                    <?= Html::error($modeladditional, 'email', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="address">住址</label>
                    <?= Html::activeInput('text', $modeladditional, 'address', ['class' => 'form-control','id' => 'address']) ?>
                    <?= Html::error($modeladditional, 'address', ['class' => 'error']); ?>
                </div>
                <div class="form-group">
                    <label for="ideas">设计理念</label>
                    <?= Html::activeTextarea($modeladditional, 'ideas', ['class' => 'form-control', 'rows' => '3','id' => 'ideas']) ?>
                    <?= Html::error($modeladditional, 'ideas', ['class' => 'error']); ?>
                </div>
                <div class="form-group">
                    <label for="works">代表作品</label>
                    <?= Html::activeTextarea($modeladditional, 'works', ['class' => 'form-control', 'rows' => '3','id' => 'works']) ?>
                    <?= Html::error($modeladditional, 'works', ['class' => 'error']); ?>
                </div>
                <div class="form-group">
                    <label for="ideal_customer">理想的服务对象</label>
                    <?= Html::activeInput('text', $modeladditional, 'ideal_customer', ['class' => 'form-control','id' => 'ideal_customer']) ?>
                    <?= Html::error($modeladditional, 'ideal_customer', ['class' => 'error']); ?>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer"style='text-align: center;'>
                <button class="btn btn-primary pull-left" type="button"  onclick="ajaxAdditional()">提交</button>
                <label class="control-label" id="secussadditional" style="color:#00a65a;margin-top: 5px; display: none;"><i class="fa fa-check"></i> Input with success</label>
                <button class="btn btn-default pull-right" type="reset" onclick="jixua()">重置</button>
            </div>
            <?= Html::endForm(); ?>
            <!-- /.box-body -->
        </div>
    </div>

    <!--设计师业务信息-->
    <div class="col-md-6">

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">设计师业务信息</h3>
            </div>
            <?php
            $form = ActiveForm::begin(
                            ['action' => [''],
                                'method' => 'post',
                                'options' => ['id' => 'form-work']]);
            ?>
            <?= Html::activeHiddenInput($modelwork, 'designer_id', ['id' => 'id-work', 'value' => $did]) ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="city">所在城市</label>
                    <?= Html::activeInput('text', $modelwork, 'city', ['class' => 'form-control','id' => 'city']) ?>
                    <?= Html::error($modelwork, 'city', ['class' => 'error']); ?>
                </div>
                <div class="form-group">
                    <label for="service_city">服务城市</label>
                    <?= Html::activeInput('text', $modelwork, 'service_city', ['class' => 'form-control','id' => 'service_city']) ?>
                    <?= Html::error($modelwork, 'service_city', ['class' => 'error']); ?>
                </div>
                <div class="form-group">
                    <label for="customer">客户对象</label>
                    <?= Html::activeInput('text', $modelwork, 'customer', ['class' => 'form-control','id' => 'customer']) ?>
                    <?= Html::error($modelwork, 'customer', ['class' => 'error']); ?>
                </div>
                
                <div class="form-group">
                    <label for="matching">配合度</label>
                    <?= Html::activeInput('text', $modelwork, 'matching', ['class' => 'form-control','id' => 'matching']) ?>
                    <?= Html::error($modelwork, 'matching', ['class' => 'error']); ?>
                </div>
                
                <div class="form-group">
                    <label for="service_type">服务类型</label>
                    <?= Html::activeInput('text', $modelwork, 'service_type', ['class' => 'form-control','id' => 'service_type']) ?>
                    <?= Html::error($modelwork, 'service_type', ['class' => 'error']); ?>
                </div>
                <?=
                $form->field($modelwork, 'nowork_time')->widget(
                        DatePicker::className(), [
                    // inline too, not bad
                    'inline' => true,
                    // modify template for custom rendering
                    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        'language' => 'zh-CN',
                    ]
                ]);
                ?>

                <?=
                $form->field($modelwork, 'nowork_time2')->widget(
                        DatePicker::className(), [
                    // inline too, not bad
                    'inline' => true,
                    // modify template for custom rendering
                    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        'language' => 'zh-CN',
                    ]
                ]);
                ?>

                <div class="form-group">
                    <label for="butt_joint">施工对接</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= Html::activeDropDownList($modelwork, 'butt_joint', [0 => '无', 1 => '自带', 2 => '合作'], ['class' => 'btn-group-lg', 'id' => 'butt_joint']) ?>
                    <?= Html::error($modelwork, 'butt_joint', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="docking_area">配套服务区域</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= Html::activeDropDownList($modelwork, 'docking_area', [0 => '本地', 1 => '全国', 2 => '加价全国'], ['class' => 'btn-group-lg', 'id' => 'docking_area']) ?>
                    <?= Html::error($modelwork, 'docking_area', ['class' => 'error']); ?>
                </div>

                <style type="text/css">
                    .checkbox{

                    }
                </style>
                <div class="form-group">
                    <label for="include_project">设计费包含项目</label>
                    <?= Html::activeCheckboxList($modelwork, 'include_project', [1 => '咨询', 2 => '硬装平面设计图', 3 => '硬装效果图', 4 => '硬装施工图', 5 => '建材（主材）清单', 6 => '陪买建材（地板 瓷砖）', 7 => '施工对接', 8 => '施工巡查（监理）', 9 => '软装设计图（带家具清单）', 10 => '陪买家具', 11 => '代买家具'], ['class' => 'checkbox', 'id' => 'include_project']) ?>
                    <?= Html::error($modelwork, 'include_project', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="pay_extra">提供额外付费项目</label>
                    <?= Html::activeCheckboxList($modelwork, 'pay_extra', [1 => '建材（主材）清单', 2 => '家具清单', 3 => '陪买建材', 4 => '陪买家具', 5 => '代买家具', 6 => '施工巡查', 7 => '施工监理'], ['class' => 'checkbox', 'id' => 'pay_extra']) ?>
                    <?= Html::error($modelwork, 'pay_extra', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="lower_price">能接受的最低设计费总额</label>
                    <?= Html::activeInput('text', $modelwork, 'lower_price', ['class' => 'form-control', 'id' => 'lower_price']) ?>
                    <?= Html::error($modelwork, 'lower_price', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="accept_area">能接受的最小面积</label>
                    <?= Html::activeInput('text', $modelwork, 'accept_area', ['class' => 'form-control','id' => 'accept_area']) ?>
                    <?= Html::error($modelwork, 'accept_area', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="accept_area">每平米设计费最低要求</label>
                    <?= Html::activeInput('text', $modelwork, 'lower_centiare', ['class' => 'form-control', 'id' => 'lower_centiare']) ?>
                    <?= Html::error($modelwork, 'lower_centiare', ['class' => 'error']); ?>
                </div>

                <div class="form-group">
                    <label for="charge">设计费收费标准</label>
                    <?= Html::activeInput('text', $modelwork, 'charge', ['class' => 'form-control','id' => 'charge']) ?>
                    <?= Html::error($modelwork, 'charge', ['class' => 'error']); ?>
                </div>
                
                 <div class="form-group">
                    <label for="charge_work">设计费+施工收费标准</label>
                    <?= Html::activeInput('text', $modelwork, 'charge_work', ['class' => 'form-control', 'placeh
older' => '', 'id' => 'charge_work']) ?>
                    <?= Html::error($modelwork, 'charge_work', ['class' => 'error']); ?>
                </div>
                
                <div class="form-group">
                    <label for="style">擅长的设计风格</label>
                    <?= Html::activeInput('text', $modelwork, 'style', ['class' => 'form-control', 'id' => 'style']) ?>
                    <?= Html::error($modelwork, 'style', ['class' => 'error']); ?>
                </div>
            </div>
            <div class="box-footer"style='text-align: center;'>
                <button class="btn btn-primary pull-left" type="button"  onclick="ajaxWork();">提交</button>
                <label class="control-label" id="secusswork" style="color:#00a65a;margin-top: 5px; display: none;"><i class="fa fa-check"></i> Input with success</label>
                <button class="btn btn-default pull-right" type="reset" onclick="jixuw()">重置</button>
            </div>
            <?php ActiveForm::end(); ?>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<script>
    function ajaxBasic() {
        var $form = $('#form-basic');
        $.ajax({
            url: $form.attr('action'),
            type: 'post',
            //dataType: 'json',
            data: $form.serialize(),
            success: function (data) {
                $("#secuss").show();
                alert(data);
            }
        });
    }
    function jixu() {
        $("#secuss").hide();
    }
    function jixuw() {
        $("#secusswork").hide();
    }
    function jixua() {
        $("#secussadditional").hide();
    }
    // work表单提交
    function ajaxWork() {
        var $form = $('#form-work');

        $.ajax({
            url: $form.attr('action')+'?id='+<?= $did?>,
            type: 'post',
            //dataType: 'json',
            data: $form.serialize(),
            success: function (data) {
                alert(data);
                $("#secusswork").show();
            }
        });

    }
    //提交Additional表单
    function ajaxAdditional() {
        var $form = $('#form-additional');
       
            $.ajax({
                url: $form.attr('action')+'&id='+<?= $did?>,
                type: 'post',
                //dataType: 'json',
                data: $form.serialize(),
                success: function (data) {
                    alert(data);
                    $("#secussadditional").show();
                }
            });
        
    }
</script>

