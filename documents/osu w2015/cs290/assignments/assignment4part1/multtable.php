<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset = 'UTF-8'>
            <title>Assignment 4 Part 1 multtable.php </title>
        </head>
        <body>
            <p>Multiplication Table Generator</p>
            <p>Enter the max and min values to view your new table.</p>
            <form action="multtable.php" method="GET">
                <p>Enter a minimum multiplicand
                    <input type="text" name="min-multiplicand" /></p>
                <p>Enter a maximum multiplicand
                    <input type="text" name="max-multiplicand" /></p>
                <p>Enter a minimum multiplier
                    <input type="text" name="min-multiplier" /></p>
                <p>Enter a maximum multiplier
                    <input type="text" name="max-multiplier" /></p>
                <p><input type="submit" name="Submit" value="Submit" /></p>
            </form>

<?php

//asign GET values 
$min_multiplicand = $_GET['min-multiplicand'];
$max_multiplicand = $_GET['max-multiplicand'];
$min_multiplier = $_GET['min-multiplier'];
$max_multiplier = $_GET['max-multiplier'];

$errorCheck = true;

//error checking min-multiplicand
    if (is_numeric($min_multiplicand)) {
        if(!is_int($min_multiplicand)) {
            echo "Min multiplicand must be an integer!";
            echo "<br/>";
            $errorCheck = false;
        }
        else {
            $errorCheck = true;
        }
    }
    if ($min_multiplicand <= 0) {
        echo "Min multiplicand must be greater than zero!";
        echo "<br/>";
        $errorCheck = false;
    }
    if ($min_multiplicand == NULL) {
        echo "Error: min multiplicand is missing!";
        echo "<br/> <br/>";
        $errorCheck = false;
    }
    
//error checking max-multiplicand 
    if (is_numeric($max_multiplicand)) {
        if(!is_int($max_multiplicand)) {
            echo "Max multiplicand must be an integer!";
            echo "<br/>";
            $errorCheck = false;
        }
        else {
            $errorCheck = true;
        }
    }
    if ($max_multiplicand <= 0) {
        echo "Max multiplicand must be greater than zero!";
        echo "<br/>";
        $errorCheck = false;
    }
    if ($max_multiplicand == NULL) {
        echo "Error: max multiplicand is missing!";
        echo "<br/> <br/>";  
        $errorCheck = false;
    }
    if ($max_multiplicand < $min_multiplicand) {
        echo "Min multiplicand should not be greater than max multiplicand!";
        echo "<br/>";
        $errorCheck = false;
    }

//error checking min-multiplier
    if (is_numeric($min_multiplier)) {
        if(!is_int($min_multiplier)){
            echo "Min multiplier must be an integer!";
            echo "<br/";
            $errorCheck = false;
        }
        else {
            $errorCheck = true;
        }
    }
    if ($min_multiplier <= 0) {
        echo "Min multiplier must be greater than zero!";
        echo "<br/>";
        $errorCheck = false;
    }
    if ($min_multiplier == NULL) {
        echo "Error: min multiplier is missing!";
        echo "<br/> <br/>";
        $errorCheck = false;
    }
    
//error check max-multiplier    
    if (is_numeric($max_multiplier)) {
        if(!is_int($max_multiplier)){
            echo "Max multiplier must be an integer!";
            echo "<br/>";
            $errorCheck = false;
        }
        else {
            $errorCheck = true;
        }
    }
    if ($max_multiplier <= 0) {
        echo "Max Multiplier must be greater than zero!";
        echo "<br/>";
        $errorCheck = false;
    }
    if ($max_multiplier == NULL) {
        echo "Error: max multiplier is missing!";
        echo "<br/> <br/>"; 
        $errorCheck = false;
    }   
    if ($max_multiplier < $min_multiplier) {
        echo "Min multiplier should not be greater than max multiplier!";
        echo "<br/>";
        $errorCheck = false;
    }
?>
  
<table border="1">
<?php
    //if ($errorCheck){
        $col = $max_multiplier - $min_multiplier + 2;
        $row = $max_multiplicand - $min_multiplicand + 2;
        for($i = 1 ; $i <= $col ; $i++) {  
            echo "<tr>";
            for ( $j = 1 ; $j <= $row ; $j++) { 
                if(($i == 1) && ($j == 1)){
                    echo "<td></td>"; }
                if (($i == 1) && ($j > 1)){
                    echo "<td>". ($min_multiplier + ($j-2))."</td>"; 
                }
                if (($j == 1) && ($i > 1)){
                    echo "<td>". ($min_multiplicand + ($i-2))."</td>"; 
                }
                else if (($j > 1) && ($i > 1)){
                    echo "<td>". ( ($min_multiplier + ($j-2)) * ($min_multiplicand + ($i-2)) )."</td>"; 
                }
            }  
            echo "</tr>";  
        } 
    //}
    ?>
    </table>
    </body>
</html> 
      
   