<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lname".
 *
 * @property string $lname
 */
class Lname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lname';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lname'], 'required'],
            [['lname'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lname' => 'Lname',
        ];
    }
}
