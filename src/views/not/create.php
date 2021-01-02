<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model sevkikaragol\note\models\Not */

$this->title = 'Create Not';
$this->params['breadcrumbs'][] = ['label' => 'Nots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="not-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
