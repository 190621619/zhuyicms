<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%zy_share_user}}".
 *
 * @property integer $share_user_id
 * @property string $open_id
 * @property string $nick_name
 * @property string $city
 * @property string $information
 * @property string $create_time
 */
class ZyShareUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zy_share_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['open_id', 'information', 'create_time'], 'string', 'max' => 200],
            [['nick_name'], 'string', 'max' => 500],
            [['city'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'share_user_id' => 'ID主键',
            'open_id' => '用户openid',
            'nick_name' => '用户昵称',
            'city' => '所在城市',
            'information' => '联系方式',
            'create_time' => '添加时间',
        ];
    }
}
