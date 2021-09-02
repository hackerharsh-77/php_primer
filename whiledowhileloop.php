<?php 
    $title="WhileDoWhile";
    include 'includes/headers.php' 
?>
    <h1>WHILE LOOP</h1>
    <?php 
         $grade = 0;
         while($grade<10)
         {
            echo '<p>I am less than 10</p>';
            $grade++;
         }
         echo '<p>exit loop</p>';

         do{
             echo '<p>I am Do While Loop</p>';
             $grade++;
         }while($grade<10);
    ?>
  <?php require "includes/footer.php"?>;