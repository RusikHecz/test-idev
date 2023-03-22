<?php

namespace app\module\todo\models;

use yii\behaviors\OptimisticLockBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "todo".
 *
 * @property string $id
 * @property string $title
 * @property integer $priority
 * @property integer $version
 * @property boolean $done
 */
class Todo extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    public function behaviors()
    {
        return [
            'optimisticLock' => [
                'class' => OptimisticLockBehavior::className(),
            ],
        ];
    }

    public function optimisticLock()
    {
        return 'version';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['priority'], 'integer', 'max' => 10],
            [['done'], 'boolean'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'       => '№',
            'title'    => 'Title',
            'priority' => 'Priority',
            'done'     => 'is done',
        ];
    }
}
