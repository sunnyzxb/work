<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info_comment".
 *
 * @property integer $id
 * @property string $contnent
 * @property integer $pid
 * @property string $found_time
 * @property integer $is_show
 */
class InfoComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contnent', 'found_time'], 'required'],
            [['contnent'], 'string'],
            [['pid', 'is_show'], 'integer'],
            [['found_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contnent' => 'Contnent',
            'pid' => 'Pid',
            'found_time' => 'Found Time',
            'is_show' => 'Is Show',
        ];
    }

}
