
<?php
$title ="PHP String Manipulation";
 include 'includes/header.php'
?>



    <h1> PHP  String Manipulation</h1>
    <?php

    //Concatentation Of Strings
        $pharse1 = "Students who come late";
        $pharse2 =  "in class, stand with Rock";
        echo $pharse1. "named Tiffasny, ".$pharse2;
         echo '<br>';
         echo '<hr/>';
          $name= "trevoir williams";
         //String Manipulation

         echo 'Uppercase first leterr:' . ucfirst($name) . '<br>';
         echo 'Uppercase first leterr of each word:' . ucwords($name) . '<br>';
         echo 'Uppercase:' .strtoupper($name) . '<br>';
         echo 'LowerCase:' .strtolower("THIS WAS ALL UPPER CASE") . '<br>';
         echo '<hr/>';
         echo 'Repeated String:' .str_repeat('a', 10) . '<br>';
         echo 'Repeated String - Nested Functions:'.strtoupper(str_repeat('a', 10)) . '<br>';
         echo 'Get a Substring:' .substr($name,5, 10) . '<br>';
         echo 'Get Position of Substring:' .strpos($name,'w') . '<br>';
         echo 'find the Length of Sting:' .strlen($name) . '<br/>';
         //Returns NULL
         //echo 'Get position of string:' .strpos($combine, 'z'). '<br/>';
         echo 'Find Character "R":' .strchr($name, 'R') . '<br>';
         echo 'Find Character "r":' .strchr($name, 'r') . '<br>';
         echo 'Find Character "s":' .strchr($name, 's') . '<br>';
         echo 'Find Character "e":' .strchr($name, 'e') . '<br>';




         echo 'Without Trim: '. "A" . " B C D " . "E" . '<br>';
         echo ' Trim spaces on both sides: '. "A" . trim(" B C D" ) ."E" . '<br>';
         echo ' Trim spaces to the left: '. "A" . ltrim(" B C D " ) ."E" . '<br>';
         echo ' Trim spaces to the right: '. "A" . rtrim(" B C D " ) ."E" . '<br>';


         echo ' Replace string with another '. str_replace("stand" , "sit" , $pharse2).'<br>';



    ?>
<?php
 require 'includes/footer.php'
?>