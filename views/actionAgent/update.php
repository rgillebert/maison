<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ActionAgent */

$this->title = 'Update Action Agent: ' . $model->actionAgent_id;
$this->params['breadcrumbs'][] = ['label' => 'Action Agents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->actionAgent_id, 'url' => ['view', 'id' => $model->actionAgent_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="action-agent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
