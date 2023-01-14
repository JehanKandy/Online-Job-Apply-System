<?php 
    include("config.php");

    session_start();

    USE FTP\Connection;

    function reguser($username, $email, $pass){
        $con = Connection();

        $select_user = "SELECT * FROM user_tbl WHERE email = '$email' && username = '$username'";
        $select_user_result = mysqli_query($con, $select_user);
        $select_user_row = mysqli_fetch_assoc($select_user_result);
        $select_user_nor = mysqli_num_rows($select_user_result);
    }    

?>
