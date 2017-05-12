<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actionpo".
 *
 * @property integer $actionPO_id
 * @property integer $actionPO_annee
 * @property string $actionPO_action
 * @property string $actionPO_description
 * @property integer $etage_id
 */
class Actionpo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actionpo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actionPO_annee', 'etage_id'], 'integer'],
            [['actionPO_action', 'actionPO_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actionPO_id' => 'Action Po ID',
            'actionPO_annee' => 'Action Po Annee',
            'actionPO_action' => 'Action Po Action',
            'actionPO_description' => 'Action Po Description',
            'etage_id' => 'Etage ID',
        ];
    }
}
