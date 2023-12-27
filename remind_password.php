<?php
include_once("connect_to_db.php");



function password_reminder($username){
    global $con;
    $row = array();

    // The query to get related row
    $result = mysqli_query($con, "SELECT * FROM table_name WHERE table_record='$username'");

    // Check the record existed 
    if(mysqli_num_rows($result) > 0){

        // Fetch the object to an array
        $row = mysqli_fetch_assoc($result);

        // Sending email to user who requested the password
        $email_to_user = mail($row['user_email'],"password Remind",$row['user_password']);
        
        // Check the email is correct
        if($email_to_user){
            echo "The password sent successfully";
        }
        
    }else{
        echo "unfurtunately  '$username' is not existed";
    }

}
password_reminder($_GET['username']);


?>