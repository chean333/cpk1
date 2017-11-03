<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mony".
 *
 * @property string $mony
 */
class Mony extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mony';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mony'], 'required'],
            [['mony'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mony' => 'Mony',
        ];
    }
}
