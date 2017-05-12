<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActionAgent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-agent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actionAgent_idAgent')->textInput() ?>

    <?= $form->field($model, 'actionAgent_idActionPO')->textInput() ?>

    <?= $form->field($model, 'actionAgent_ordre')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
