<?php

namespace common\models;

use Yii;

class ZyStyleImg extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%zy_style_img}}';
    }

}
