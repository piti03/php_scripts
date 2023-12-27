<?php



include_once('connect_to_db.php');

function insert_to_db(){
    global $con;
    // Get method to recieve the arguments from client side.
    $username = $_GET['username'];
    $password = $_GET['password'];

    // The query to insert arguments in your database.
    $the_query = "INSERT INTO table_name(table_record,table_record) VALUES('$username','$password')";
    
    // Method to deploy your query
    $insert_query = mysqli_query($con,$the_query);

    // Check if your query is correct.
    if($insert_query){
        echo "params inserted successfully";
    }else{
        echo "noting inserted";
    }
    
}
insert_to_db();



?>