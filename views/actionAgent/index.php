<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActionAgentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Action Agents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-agent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Action Agent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'actionAgent_id',
            'actionAgent_idAgent',
            'actionAgent_idActionPO',
            'actionAgent_ordre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
