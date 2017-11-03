<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $Num
 * @property string $date
 * @property string $time
 * @property string $department
 * @property string $list
 * @property string $mony
 * @property string $register
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Num'], 'required'],
            [['Num'], 'integer'],
            [['date', 'time'], 'safe'],
            [['department', 'list', 'mony', 'register'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Num' => 'เลขหนังสือ',
            'date' => 'วันที่',
            'time' => 'เวลา',
            'department' => 'หน่วยงาน',
            'list' => 'รายการ',
            'mony' => 'ยอดเงิน',
            'register' => 'ผู้บันทึก',
        ];
    }
}
