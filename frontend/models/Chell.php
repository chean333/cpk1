<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chell".
 *
 * @property integer $number
 * @property string $department
 * @property string $texts
 * @property integer $mony
 * @property string $register
 * @property string $date
 */
class Chell extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chell';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'department', 'texts', 'mony', 'register', 'date'], 'required'],
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
            'number' => 'เลขใบสั่งซื้อสั่งจ้าง',
            'department' => 'หน่วยงาน',
            'texts' => 'รายการ',
            'mony' => 'ยอดเงิน',
            'register' => 'ผู้บันทึก',
            'date' => 'วันที่บันทึก',
        ];
    }
}
