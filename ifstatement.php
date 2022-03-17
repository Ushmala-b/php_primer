<?php
$title =" ifstatement";
 include 'includes/header.php'
?>

<h1>ifstatement</h1>
<h3 style= "color :red"></h3>
    <?php

     

     //An If statement that will carry out an action based on the value of the variable.
     
     echo '<h2> If Statement </h2>' ;

      $grade = 90 ;
      // === , == , > , < , <=, >=,
     if($grade >= 50){
         echo '<h3  style= "color :green"  > YOU HAVE PASSED </h3>' ;
     }
      else{
        echo '<h3 style= "color :red" > YOU HAVE FAILED </h3>' ; 
      }



     // IF- Else IF- Else
     $grade = 'C' ;
     if($grade == 'A'){
         echo '<h2 style= "color :green" > YOU ARE A SUPERSTAR!  </h2>' ;
     }
       elseif($grade == 'B'){
        echo '<h2  style= "color :blue" > YOU DID WELL!  </h2>' ;
       }
      else{
        echo '<h2 style= "color :red"  > YOU DID FAILED...  </h2>' ;
      }


      $grade = 'B' ;
     if($grade == 'A'){
         echo '<h2 style= "color :green" > YOU ARE A SUPERSTAR!  </h2>' ;
     }
       elseif($grade == 'B'){
        echo '<h2  style= "color :blue" > YOU DID WELL!  </h2>' ;
       }
      else{
        echo '<h2 style= "color :red"  > YOU DID FAILED...  </h2>' ;
      }
    ?>

<?php
 require 'includes/footer.php'
?>