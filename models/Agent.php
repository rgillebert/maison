<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agent".
 *
 * @property integer $agent_id
 * @property integer $matricule
 * @property string $nom
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricule'], 'integer'],
            [['nom'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agent_id' => 'Agent ID',
            'matricule' => 'Matricule',
            'nom' => 'Nom',
        ];
    }
}
