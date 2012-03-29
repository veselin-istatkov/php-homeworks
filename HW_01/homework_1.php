<head> <link href="style.css" type="text/css" rel="stylesheet"/> </head>

<form action="Homework_1.php" method="get">
    <input type="text" name="number">
    <input type="submit" value="Enter">
    
</form>
<?php

    function is_prime($n) {
        for($i = 2; $i < sqrt($n); $i++) {
            if($n % $i == 0) return false;
        }
        return true;
    }

    $num = $_GET[number];
    if (!is_numeric($num)) {
        ?>
            <div id="red_text"> The parameter is not a number </div>
        <?php
    } 
    else {
        if(!(($num >= 0) && ($num <= 19999))) {
            ?>
                <div id="red_text"> The parameter is not within the range [0,19999] </div>
            <?php
        }
        if(is_prime($num)) {
            ?>
                <div id="red_text"> <?php echo "The number $num is prime !" ?> </div>
            <?php
        } 
        else {
            ?>
                <div id="blue_text"> <?php echo "The number $num is NOT prime !" ?> </div>
            <?php
        }
    }
?>
