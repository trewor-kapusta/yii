<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Moja tablica';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('@web/js/board.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="site-board">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="board_messages"></div>
    <div id="board_send"/>
    	<form id="board_form" action="javascript:void(0)">
    	<input type="text" width="100" id="board_input_message" />
    	<input type="submit" value="Wyslij" />
    	</form>
    </div>
</div>