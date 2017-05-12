<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etage".
 *
 * @property integer $etage_id
 * @property string $etage_description
 */
class Etage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['etage_description'], 'required'],
            [['etage_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'etage_id' => 'Etage ID',
            'etage_description' => 'Etage Description',
        ];
    }
}
