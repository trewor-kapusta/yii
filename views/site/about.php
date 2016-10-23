<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Moja tablica';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Jestem Maciek i mam ajlpa 
    </p>
    <img src="/images/smiley.gif" alt="Smiley face" width="42" height="42">

    <code><?= __FILE__ ?></code>
</div>
