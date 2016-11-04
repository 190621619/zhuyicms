<?php
$this->params['breadcrumbs'][] = '测试风格用户信息';
?>
<h2>
    风格分享管理
    <small>Preview</small>
</h2>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">用户信息列表</h3>

                <div class="box-tools">
                    <div style="width: 150px;" class="input-group input-group-sm">
                        <input type="text" placeholder="Search" class="form-control pull-right" name="table_search">

                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                            <th>ID</th>
                            <th>OpenID</th>
                            <th>昵称</th>
                            <th>所在城市</th>
                            <th>联系方式</th>
                            <th>提交时间</th>
                        </tr>

                        <?php
                        foreach ($styleList as $val) {
                            ?>
                            <tr>
                                <td><?= $val['share_user_id'] ?></td>
                                <td><?= $val['open_id'] ?></td>
                                <td><?= $val['nick_name'] ?></td>
                                <td><?= $val['city'] ?></td>
                                <td><?= $val['information'] ?></td>
                                <td><?php echo date('Y-m-d', $val['create_time']) ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">总计：<?= $pagination->totalCount; ?> </div>
    </div>
    <div class="col-sm-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">

            <?=
            \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
                'options' => [
                    'class' => 'pagination',
                ]
            ]);
            ?>
        </div>
    </div>
</div>
