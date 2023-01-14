<?php 
    use FTP\Connection;

    include("config.php");

    session_start();


    function reguser($username, $email, $pass){
        $con = Connection();

        $select_user = "SELECT * FROM user_tbl";
        $select_user_result = mysqli_query($con, $select_user);
        $select_user_row = mysqli_fetch_assoc($select_user_result);
        $select_user_nor = mysqli_num_rows($select_user_result);

        if($select_user_nor > 0){
            if($username == $select_user_row['username']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error</strong>Username already exists..!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";
            }
            if($email == $select_user_row['email']){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error</strong>Email already exists..!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";
            }
        }
        else{
            $insert_data = "INSERT INTO user_tbl(username,email,pass_user,user_type,is_active,is_pending,join_date)VALUES('$username','$email','$pass','user',0,1,NOW())";
            $insert_data_result = mysqli_query($con, $insert_data);

            if(!$insert_data_result){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Process Error</strong>Cannot Process Task..!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";
            }
            else{
                return  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Successfully</strong>Account Created Successfully <a href='login.php'>Login Here</a>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>";
            }
        }
    }
    
    function login_user($username, $pass){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE username = '$username' && pass_user = '$pass'";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_nor = mysqli_num_rows($check_user_result);
        $check_user_row = mysqli_fetch_assoc($check_user_result);

        if($check_user_nor > 0){
            if($check_user_row['user'])
        }
        else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>User Error</strong>User Doesn't exists..!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>";
        }

    }

?>
