<!-- Navneet Verma -->

<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $n = strlen($num);
    while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $n);
    $temp = (int)($temp / 10);
    }
    if ($num == $sum) {
    echo "$num is an Armstrong number. </br>";
    } else {
    echo "$num is not an Armstrong number. </br>" ;
    }
}

isArmstrong(153); 
isArmstrong(370); 
isArmstrong(371); 
isArmstrong(407); 
isArmstrong(9474); 
isArmstrong(9475); 
?>
