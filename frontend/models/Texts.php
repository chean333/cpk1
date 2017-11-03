<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "texts".
 *
 * @property string $texts
 */
class Texts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'texts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texts'], 'required'],
            [['texts'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'texts' => 'Texts',
        ];
    }
}
