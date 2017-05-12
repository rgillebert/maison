<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Etage */

$this->title = 'Update Etage: ' . $model->etage_id;
$this->params['breadcrumbs'][] = ['label' => 'Etages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->etage_id, 'url' => ['view', 'id' => $model->etage_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
