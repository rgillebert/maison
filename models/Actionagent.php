<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actionagent".
 *
 * @property integer $actionAgent_id
 * @property integer $actionAgent_idAgent
 * @property integer $actionAgent_idActionPO
 * @property integer $actionAgent_ordre
 */
class Actionagent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actionagent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actionAgent_idAgent', 'actionAgent_idActionPO'], 'required'],
            [['actionAgent_idAgent', 'actionAgent_idActionPO', 'actionAgent_ordre'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actionAgent_id' => 'Action Agent ID',
            'actionAgent_idAgent' => 'Action Agent Id Agent',
            'actionAgent_idActionPO' => 'Action Agent Id Action Po',
            'actionAgent_ordre' => 'Action Agent Ordre',
        ];
    }
}
