<?php

/* @var $this yii\web\View */

$this->title = 'Portal społecznosciowy';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Witaj	<?php echo Yii::$app->user->identity->username;?>	!</h1>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">               
                <p><a class="btn btn-default" href='index.php?r=message%2Fsend'>Wiadomości &raquo;</a></p>
                <p><a class="btn btn-default" href='index.php?r=site%2Fboard'>Tablica &raquo;</a></p>

			</div>
            <div class="col-lg-8">
                <h2>Hej</h2>
                <p>Aby prześć dalej użyj menu na górze.</p>
            </div>
            
        </div>

    </div>
</div>
