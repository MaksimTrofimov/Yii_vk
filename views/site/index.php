<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Проект в разработке!!!</h1>

        <p class="lead" style="color:red">До релиза осталось:</p>
        <?php
        $data = '30.04.2017';
        $time = strtotime($data);
        $today = time();
        $day = ($today - $time)/86400*-1;
        $day = floor($day);
        $hours = $day*24;
        echo "<h1> ".$day." дней."."</h1> ";

        ?>
    </div>


</div>


