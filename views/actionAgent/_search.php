<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActionAgentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-agent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'actionAgent_id') ?>

    <?= $form->field($model, 'actionAgent_idAgent') ?>

    <?= $form->field($model, 'actionAgent_idActionPO') ?>

    <?= $form->field($model, 'actionAgent_ordre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
