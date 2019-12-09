<?php
    print "<h3>REFRESH PAGE TO INCREMENT COUNTER</h3>";
    $name = "prog6-Counter.txt";
    $file = fopen($name, "r");
    $hits = fscanf($file, "%d");
    fclose($file);
    $hits[0]++;
    $file = fopen($name, "w");
    fprintf($file, "%d", $hits[0]);
    fclose($file);
    print "Total Views: ". $hits[0];
?>