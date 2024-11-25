<?php   
    $output=$_GET['box'];
    $input=$_GET['in_num'];
    function print_table($n,$output){
        $i=1;
        while($i<=10){
            $r=$n*$i;
            // $output+=`${n}*${i}=${r}`;
            $output.="$n * $i = $r <br>";
            $i++;
        }
    }
    print_table($input,$output);
?>