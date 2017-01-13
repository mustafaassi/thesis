<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Query;

/**
 * This is the model class for table "temperature".
 *
 * @property integer $id
 * @property double $value
 * @property string $createdAt
 */
class Temperature extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'temperature';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['value'], 'required'],
            [['value'], 'number'],
            [['createdAt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'createdAt' => 'Created At',
        ];
    }

        

}
