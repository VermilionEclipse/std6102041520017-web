<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $staff_no
 * @property string $f_name
 * @property string $l_name
 * @property string $position
 * @property string $sex
 * @property string $d_o_b
 * @property string $salary
 * @property int $branch_id
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['d_o_b'], 'safe'],
            [['salary'], 'number'],
            [['branch_id'], 'integer'],
            [['staff_no', 'sex'], 'string', 'max' => 10],
            [['f_name', 'l_name', 'position'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_no' => 'Staff No',
            'f_name' => 'F Name',
            'l_name' => 'L Name',
            'position' => 'Position',
            'sex' => 'Sex',
            'd_o_b' => 'D O B',
            'salary' => 'Salary',
            'branch_id' => 'Branch ID',
        ];
    }
}
