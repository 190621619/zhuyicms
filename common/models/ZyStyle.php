<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%zy_style}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $style_json
 * @property string $create_time
 */
class ZyStyle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zy_style}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['create_time'], 'safe'],
            [['style_json'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID主键',
            'user_id' => '用户ID',
            'style_json' => '用户风格结果',
            'create_time' => '测试时间',
        ];
    }
}
