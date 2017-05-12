<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ActionAgent */

$this->title = 'Create Action Agent';
$this->params['breadcrumbs'][] = ['label' => 'Action Agents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-agent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
