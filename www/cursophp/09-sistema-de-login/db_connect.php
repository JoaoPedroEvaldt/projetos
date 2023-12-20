<?php

$servername = "localhost";
$username = "root";
$password = "1q2w3e4r5t";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão:".mysqli_connect_error();
endif;


   