<?php
// config your database
$con = mysqli_connect("localhost","root","","db_name");

if(mysqli_connect_errno()){
    echo "no a successfull connection". mysqli_connect_error();
}

return $con;





?>
