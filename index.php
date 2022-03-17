
<?php
$title ="Index";
 include 'includes/header.php'
?>

<!--Basic HTml-->
    <h1>Hello World - PHP Primer</h1>
    <br>
    <?php
      //Printing to HTML using echo
      echo 'Heloo PHP!' ;
      // You cam echo HTMLtags
      echo '<br>';
      echo 'Second Line';
      echo '</br>';
    ?>



     <?php

     // Varibales nedd a '$'. They are not Strongly typed
     $name = ' Trevior Williams';
     $age = 31;
     //echo varibales
     echo $name;
     echo '<h1> My name is:' .$name. ' </h1>';
     echo '<h1> My age is:' .$name. ' </h1>';
     //echo using double quotes and interpolation
     echo "<h1> My name is: $name  </h1>";
     ?>

<button type="button" class="btn btn-dark"> CLICK ME! </button>
<button type="button" class="btn btn-primary"> CLICK ME! </button>
<button type="button" class="btn btn-success"> CLICK ME! </button>


<?php
 require 'includes/footer.php'
?>