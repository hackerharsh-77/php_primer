<?php 
    $title="SwitchStatement";
    include 'includes/headers.php' 
?>
    <h1>SWITCH STATEMENT</h1>
    <?php 
        $grade = 'A';
        switch($grade)
        {
            case 'A':
            {
                echo '<h3>YOU ARE A SUPERSTAR</h3>';
                break;
            }
            case 'B':
            {
                echo '<h3> YOU ARE GOOD';
                break;
            }
            default:
                echo '<h3> YOU HAVE FAILED...</h3>';
                break;
        }
    ?>
<?php require "includes/footer.php"?>;