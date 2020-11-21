<?php

    $conn=new mysqli("localhost","root","","selex");
    if($conn->connect_error){
        echo "error in mysql";
    }
?>
