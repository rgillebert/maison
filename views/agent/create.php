<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\agent */

$this->title = 'Create Agent';
$this->params['breadcrumbs'][] = ['label' => 'Agents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
