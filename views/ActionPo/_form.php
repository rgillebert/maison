<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\actionPo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-po-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actionPO_annee')->textInput() ?>

    <?= $form->field($model, 'actionPO_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actionPO_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'etage_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
