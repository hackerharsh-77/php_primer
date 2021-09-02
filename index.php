<?php
$title="Index";
include "includes/headers.php"
?>
    <h1> Hello HTML</h1>
    <br/>
    <?php
        echo 'hello php';
        echo '<br/>';
        echo 'second line';
    ?>
    <?php
        $name = 'Harsh';
        $age = 19;
        echo '<br/>';
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
    ?>
    <button type="button" class="btn btn-dark">HMM!</button>
    <button type="button" class="btn btn-primary">ACCHA!</button>
    <button type="button" class="btn btn-success">THIK HAI!</button>
    <a href="https://www.heroku.com" target="blank" class="btn btn-danger" > heroku.com</a><br>
  <?php require "includes/footer.php"?>;    