<?php
    $HOSTNAME='localhost';
    $USERNAME='root';
    $PASSWORD='';
    $DATABASE='eventsconnect';


    $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

    if(!$con){
        die("Database connection failed: " .mysqli_connect_error($con));
        echo "Database connection failed:";
    }
?>