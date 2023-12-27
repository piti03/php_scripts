<?php

include_once("connect_to_db.php");

function select_data(){
    global $con;
    // The query
    $result = mysqli_query($con,"SELECT * FROM table_name");
    $row = array();
    $row_array = array();

    // If your table exist or has any record
    if(mysqli_num_rows($result)> 0){

        // Extract records from db and turn it to a json array.
        while($row = mysqli_fetch_assoc($result)){

            // Push each object as an index into the array
            array_push($row_array,$row);  
        }
            // Turn your array to a JsonArray
            echo json_encode($row_array);       
    }else{
        echo "something went wrong , please check your network or so".$result::error;
    }
}


select_data();

?>