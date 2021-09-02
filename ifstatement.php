<?php   
    $title="IfStatements";
    include 'includes/headers.php' 
?>
    <h1>IF STATEMENT</h1>
    <?php
        echo '<h2>If statement</h2>';
        $grade= 30;
        if($grade>=50)
        {
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
        $grade='A';
        if($grade=='A')
        {
            echo '<h3>YOU ARE A SUPERSTAR</h3>';
        }
        else if($grade=='B')
        {
            echo '<h3> YOU ARE GOOD';
        }
        else{
            echo '<h3> YOU HAVE FAILED...</h3>';
        }
    ?>

<?php require "includes/footer.php"?>;