<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\actionPo */

$this->title = 'Create Action Po';
$this->params['breadcrumbs'][] = ['label' => 'Action Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-po-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
