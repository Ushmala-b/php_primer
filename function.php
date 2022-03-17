<?php
$title =" Functions";
 include 'includes/header.php'
?>


    <h1> Functions</h1>
    
    
    <?php

          //Definin a Function

          function writeMeassge(){
              echo "you are really a nice person, Have a nice time! <br/>";
          }

          // calling a function

          writeMeassge();

          echo "<hr/>";

          writeMeassge();


          echo "<hr/>";
          // Functions with parameters 
          function addFunction($num1 ,$num2){
              $num =$num1 + $num2;
              $num2 =$num2 + 1;

              echo "The sum of $num1 and $num2 is: $num <br/>";
          }

          function changeNum(&$num){
                 $num = $num +10;
                 //$num+=1;

          function returnProduct($num1,$num2){
              $prod = $num1 * $num2;
              return $prod;
          }       

          }

          $num= 500;
          addFunction(10,20);
          addFunction(10,$num);
          addFunction('10','50');
          echo $num .'<br/>';
          addFunction("70","30");



           changeNum($num);
           echo $num .'<br/>';



           $return_value = returnProduct(10,200);
           echo  $return_value . '<br/>';
           ?>

<?php
 require 'includes/footer.php'
?>