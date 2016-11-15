<?php

namespace common\util;

class StyleExt {

    //风格测试主分类配置
    public static $_config = [
        '1' => '现代简约',
        '2' => '工业风格',
        '7' => '北欧风格',
        '5' => '日式风格',
        '9' => '美式风格',
        '6' => 'Art Deco',
        '10' =>'法式古典风格',
        '3' => '波西米亚风格',
        '8' => '中古风格',
        '4' => '中式风格'
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
