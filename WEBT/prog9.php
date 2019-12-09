<?php
$states = "Mississippi Alabama Texas Massachussetts Kansas";
$statesArray = [];
$states1 = explode(" ", $states);
echo "Original Array:"."<br/>";
foreach($states1 as $i=>$value)
    print("States[$i] =$value<br>");
echo "<br/>";
foreach($states1 as $state) {
    if (preg_match("/.*xas$/", $state))
        $statesArray[0] = $state;
    if (preg_match("/^k.*s$/i", $state))
        $statesArray[1] = $state;
    if (preg_match("/^M.*s$/", $state))
        $statesArray[2] = $state;
    if (preg_match("/.*a$/", $state))
        $statesArray[3] = $state;
}
for($i=0; $i<sizeof($statesArray); $i++)
    echo $statesArray[$i]."<br/>";
?>