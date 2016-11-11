<?php

namespace common\util;

class StyleExt {

    //风格测试主分类配置
    public static $_config = [
        '1' => '日本分类',
        '2' => '中式分类',
        '3' => '美工分类',
        '4' => '什么分类'
    ];

    /**
     * 随机取风格测试图片
     * @param int $_styleId
     * @param int $_num
     * @return array 
     */
    public static function getRndStyleImage($_styleId, $_num = '3') {
        
        $rs = \common\models\ZyStyleImg::findAll(['style_id'=>$_styleId]);
        
        if(count($rs)>3){
            $_tmpRs = array_rand($rs,$_num);
            $_tmpEndRs = [];
            foreach ($_tmpRs as $k=>$v){
                $_tmpEndRs[] = $rs[$v];
            }
            return $_tmpEndRs;
        }else{
            return $rs;
        }
        
    }

}
