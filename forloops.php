<?php
    $title="Forloops";
    include 'includes/headers.php' 
?>
    <h1>For Loops</h1>
    <?php
        for($count=0; $count<10; $count++)
        {
            echo '<p>Hello World </p>';
        }
        for($count=0;$count<10;$count++)
        {
            echo "<p>the count is: $count</p>";
        }
    ?>
  <?php require "includes/footer.php"?>;