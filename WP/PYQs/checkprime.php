<?php
    function isPrime($n){
        if($n<=1){
            return false;
        }
        $i=2;
        while($i<$n){
            if($n % $i==0){ 
                return false;
            }
            $i++;
        }
        return true;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num = $_POST['number'];
        if (isPrime($num)) {
            echo "<p>This number is prime.</p>";
        } else {
            echo "<p>This number is not prime.</p>";
        }
    }
?>