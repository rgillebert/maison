<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\actionPoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Action Pos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="action-po-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Action Po', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'actionPO_id',
            'actionPO_annee',
            'actionPO_action',
            'actionPO_description',
            'etage_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
