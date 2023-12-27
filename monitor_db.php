<?php 
include_once("connect_to_db.php");

// define a function which takes two arguments as entries and check if they are correct.
function monitor_db($username, $password){
    global $con;
    $rejected = "sorry there is no relevant record in database";
    $row = array();

         //The query
    $result_query = mysqli_query($con, "SELECT * FROM table_name WHERE table_record='$username' AND table_record='$password'");

        // Check the record existency
    if(mysqli_num_rows($result_query) > 0){

        // fetch the result to an array
        $row = mysqli_fetch_assoc($result_query);

        // change the result to json type
        echo json_encode($row);
    }else{
        echo json_encode($rejected);
    }

}

monitor_db($_GET['username'],$_GET['password']);



?>