<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registers".
 *
 * @property integer $number
 * @property string $date
 * @property string $department
 * @property string $texts
 * @property integer $mony
 * @property string $register
 */
class Registers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'department', 'texts', 'mony', 'register'], 'required'],
            [['number', 'mony'], 'integer'],
            [['date'], 'safe'],
            [['department'], 'string', 'max' => 20],
            [['texts', 'register'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'number' => 'เลขที่',
            'date' => 'วันที่',
            'department' => 'หน่วยงาน',
            'texts' => 'รายการ',
            'mony' => 'ยอดเงิน',
            'register' => 'ผู้ลงทะเบียน',
        ];
    }
}
