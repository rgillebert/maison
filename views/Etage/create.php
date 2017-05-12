<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Etage */

$this->title = 'Create Etage';
$this->params['breadcrumbs'][] = ['label' => 'Etages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
