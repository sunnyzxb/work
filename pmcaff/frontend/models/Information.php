<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "information".
 *
 * @property integer $id
 * @property string $title
 * @property string $contnet
 * @property integer $author_id
 * @property integer $type
 * @property integer $is_audit
 * @property integer $qusetion_num
 * @property integer $read_num
 * @property integer $like_num
 * @property integer $collect_num
 * @property string $found_time
 * @property string $update_time
 * @property integer $update_id
 * @property integer $state
 * @property integer $is_show
 * @property integer $is_selected
 */
class Information extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'contnet', 'author_id', 'type', 'found_time', 'update_time', 'is_selected'], 'required'],
            [['contnet'], 'string'],
            [['author_id', 'type', 'is_audit', 'qusetion_num', 'read_num', 'like_num', 'collect_num', 'update_id', 'state', 'is_show', 'is_selected'], 'integer'],
            [['found_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'contnet' => 'Contnet',
            'author_id' => 'Author ID',
            'type' => 'Type',
            'is_audit' => 'Is Audit',
            'qusetion_num' => 'Qusetion Num',
            'read_num' => 'Read Num',
            'like_num' => 'Like Num',
            'collect_num' => 'Collect Num',
            'found_time' => 'Found Time',
            'update_time' => 'Update Time',
            'update_id' => 'Update ID',
            'state' => 'State',
            'is_show' => 'Is Show',
            'is_selected' => 'Is Selected',
        ];
    }

     //查询文章
    public function info_list($orderby='found_time desc',$limit=''){
        $result = $this->find();
        //限制条数
        if($limit!=''){
            $result=$result->limit($limit);
        }
        //排序
        if($orderby!=''){
           $result=$result->orderby($orderby);
        }
        return $result=$result->Asarray()->all();
    }
}
