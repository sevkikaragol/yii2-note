<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel sevkikaragol\note\models\NotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */




$this->title = 'unutma!';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="not-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Not Yaz', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Çöp Kutusu', ['silinennot'], ['class' => 'btn btn-warning']) ?>

    </p>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'body:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
