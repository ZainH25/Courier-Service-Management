<?php

    $dbcon = mysqli_connect('localhost','root','','courier');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>