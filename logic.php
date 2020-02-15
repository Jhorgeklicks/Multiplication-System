<?php 
    if(isset($_POST['value'])){
        $num = $_POST['value'];
        
        // other variables
        $counter = 12;
        $init = 1;
        $output = '';
        
        for($init; $init<= $counter; $init++){
            $sum = $num * $init ; 
            $output .= "<p>$num x $init = <strong>$sum</strong></p>"; 
        }
        echo $output;
    }
?>
