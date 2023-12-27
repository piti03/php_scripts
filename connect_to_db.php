<?php


// config your database
// mysqli_connect("localhost", "admin_username", "admin_password","db_name")
$con = mysqli_connect("localhost","root","","db_name"); 

if(mysqli_connect_errno()){
    echo "no a successfull connection". mysqli_connect_error();
}

return $con;





?>
