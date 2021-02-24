<?php 
    $price = 4000; 
    $guess = $_POST['guess']; 
    $feedback = ''; 

    if ( is_numeric($guess) ) {
        $guess = (int)$guess; 
    } else {
        echo "guess only numbers plz !"; 
        return; 
    }

    if ($guess < $price) {
        $feedback = "too low"; 
    } else if ($guess > $price) {
        $feedback = "too high"; 
    } else {
        $feedback = "correct"; 
    }
    echo $feedback; 


?>
