<?php
    $a = array(array(1,2,3), array(4,5,6), array(7,8,9));
    $b = array(array(7,8,9), array(4,5,6), array(1,2,3));
    //Printing the matrices
    echo "First Matrix:"."<br/>";
    for($row=0; $row<3; $row++){
        for($col=0; $col<3; $col++){
            echo $a[$row][$col]." ";
        }
        echo "<br/>";
    }
    echo "<br/>";
    echo "Second Matrix:"."<br/>";
    for($row=0; $row<3; $row++){
        for($col=0; $col<3; $col++){
            echo $b[$row][$col]." ";
        }
        echo "<br/>";
    }
    echo "<br/>";
    $m = count($a);
    $n = count($a[0]);
    $p = count($b);
    $q = count($b[0]);
    //(b) Transpose
    echo "Transpose Of First Matrix:" . "<br/>";
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++){
            echo $a[$col][$row]." ";
        }
        echo "<br/>";
    }
    echo "<br/>";
    //(c) Addition
    if($m==$p && $p==$q) {
        echo "Sum Of The Two Matrices:" . "<br/>";
        for ($row = 0; $row < $m; $row++) {
            for ($col = 0; $col < $n; $col++) {
                echo $a[$row][$col]+$b[$row][$col]." ";
            }
            echo "<br/>";
        }
    }
    else {
        echo "Incompatible For Addition","<br/>";
    }
    echo "<br/>";
    //(d) Multiplication Of The Two Matrices
    if($n==$p) {
        echo "Multiplication Of The Two Matrices" . "<br/>";
        $result = array();
        for ($row = 0; $row < $m; $row++) {
            for ($col = 0; $col < $q; $col++) {
                $result[$row][$col] = 0;
                for ($k = 0; $k < $n; $k++) {
                    $result[$row][$col] += $a[$row][$k] * $b[$k][$col];
                }
            }
        }
        for ($row = 0; $row < $m; $row++) {
            for ($col = 0; $col < $q; $col++){
                echo $result[$col][$row]." ";
            }
            echo "<br/>";
        }
    }
    else{
        echo "Incompatible For Multiplication"."<br/>";
    }