<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model sevkikaragol\note\models\Not */

$this->title = 'Düzenlendiğiniz not: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="not-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
