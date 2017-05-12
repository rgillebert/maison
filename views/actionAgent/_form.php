<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model app\models\ActionAgent */
/* @var $form ActiveForm */
?>

<div class="action-agent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actionAgent_idAgent')->textInput() ?>

    <?php
    echo $form->field($model, 'actionAgent_idActionPO')->widget(Select2::classname(), [
        'data' => $actionmapping,
        'options' => ['placeholder' => 'Select a action ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

        <?= $form->field($model, 'actionAgent_ordre')->textInput() ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
