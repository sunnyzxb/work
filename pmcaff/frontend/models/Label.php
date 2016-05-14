<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "label".
 *
 * @property integer $id
 * @property string $name
 * @property string $q_id
 * @property string $found_time
 * @property string $update_time
 * @property integer $update_id
 */
class Label extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'label';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'q_id', 'found_time', 'update_time', 'update_id'], 'required'],
            [['id', 'update_id'], 'integer'],
            [['found_time', 'update_time'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['q_id'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'q_id' => 'Q ID',
            'found_time' => 'Found Time',
            'update_time' => 'Update Time',
            'update_id' => 'Update ID',
        ];
    }

    //查询标签
    public function lable_list($orderby='sort asc',$limit=''){
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
