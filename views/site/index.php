<?php

/* @var $this yii\web\View */

$this->title = 'Portal społecznosciowy';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Witaj	<?php echo Yii::$app->user->identity->username;?>	!</h1>
        <p class="lead">obsluga to ino menu na górze</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">               
                <p><a class="btn btn-default" href='index.php?r=site%2Fmessage'>Wiadomości &raquo;</a></p>
                <p><a class="btn btn-default" href='index.php?r=site%2Fboard'>Moja tablica &raquo;</a></p>
                <p><a class="btn btn-default" href='index.php?r=site%2Fcontact'>Kontakt &raquo;</a></p>
                <p><a class="btn btn-default" href='index.php?r=site%2Flogin'>Login &raquo;</a></p>
			</div>
            <div class="col-lg-8">
                <h2>Heading</h2>
                <p>sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board sotry board </p>
            </div>
            
        </div>

    </div>
</div>
