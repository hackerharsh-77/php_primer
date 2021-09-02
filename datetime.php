<?php 
    $title="DateTime";
    include 'includes/headers.php' 
?>
    <?php 
        $datenow = getdate();
        echo "Today date is </br>";
        echo $datenow['mday'].'</br>';
        echo $datenow['mon'].'</br>';
        echo $datenow['year'].'</br>';

        echo "today's date is : " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'];
    ?>
   <?php require "includes/footer.php"?>;