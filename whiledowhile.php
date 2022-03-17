<?php
$title ="While/DO Loop";
 include 'includes/header.php'
?>

    <h1>While Loop</h1>
    <?php
    $garde = 0;
    //Infinte Loop
    //while ($garde < 10 ) {
        //echo '<p> I AM LESS 10! </p>';
    //}

    //Pre-Condition Loop


    while($garde < 10){
        echo '<p>  I AM LESS THAN 10! </p>';
        $garde++;
    }

    echo 'EXIT LOOP!' ;
    ?>


    <h1> DO-While Loop</h1>
    <?php
 //Post-Condition Loop
   $garde = 0;
    do{
        echo '<p> I AM DO WHILE LOOP <p>';
        $garde++;
    }while($garde < 10);
    ?>


<?php
 require 'includes/footer.php'
?>