<!-- Navneet Verma -->
<?php
function isPalindrome($str){
    $str = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    $reverse_str = strrev($str);

    if($str == $reverse_str){
        echo "$str is a palindrome.<br>";
    } else {
        echo "$str is not a palindrome.<br>";
    }
}

isPalindrome("kayak");
isPalindrome("Civic"); 
isPalindrome("NavneetVerma");

