<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "job_apply";

        $con = mysqli_connect($server,$user,$pass,$db_name);

        $result = (!$con)? "Connection Lost" : $con;
        echo $result;
    }
?>
