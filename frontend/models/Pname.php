<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pname".
 *
 * @property string $pname
 */
class Pname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pname';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname'], 'required'],
            [['pname'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pname' => 'Pname',
        ];
    }
}
