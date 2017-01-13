<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "humidity".
 *
 * @property integer $id
 * @property double $value
 * @property string $createdAt
 */
class Humidity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'humidity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'number'],
            [['createdAt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'createdAt' => 'Created At',
        ];
    }
}
