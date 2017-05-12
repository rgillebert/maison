<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\actionPoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-po-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'actionPO_id') ?>

    <?= $form->field($model, 'actionPO_annee') ?>

    <?= $form->field($model, 'actionPO_action') ?>

    <?= $form->field($model, 'actionPO_description') ?>

    <?= $form->field($model, 'etage_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
