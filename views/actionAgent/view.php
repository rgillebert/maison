<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ActionAgent */

$this->title = $model->actionAgent_id;
$this->params['breadcrumbs'][] = ['label' => 'Action Agents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-agent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->actionAgent_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->actionAgent_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'actionAgent_id',
            'actionAgent_idAgent',
            'actionAgent_idActionPO',
            'actionAgent_ordre',
        ],
    ]) ?>

</div>
