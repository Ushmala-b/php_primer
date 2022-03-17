<?php
$title ="Array";
 include 'includes/header.php'
?>
    <h1>Arrays</h1>
    <?php
    // a variable
    $num = 3;
    // an array
    //Only one datatypes
    $numbers =array(1,2,3,4,5,6,7,8,9,101,2,65,78,4,65,68,65,65,657);
    //you can access the value in a subscript of the array usinf the index.
    echo $numbers[5];

    echo "<p> $numbers[9] </p>" ;


    $size =count($numbers);
    echo "<p>Array Number is Size : $size </p>" ;

   for($count = 0; $count < 10 ; $count++) {
    echo "$numbers[$count] ";
   }
        ?>


<?php
 require 'includes/footer.php'
?>