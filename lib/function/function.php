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

        $check_user_is_panding = "SELECT * FROM user_tbl WHERE username = '$username' && pass_user = '$pass' && is_active = 0 && is_pending = 1";
        $check_user_is_panding_result = mysqli_query($con, $check_user_is_panding);
        $check_user_is_panding_nor = mysqli_num_rows($check_user_is_panding_result);

        $_SESSION['userName'] = $username;

        if($check_user_is_panding_nor > 0){
            header("location:waiting_user.php");
        }
        else{
            $check_deactrive_user = "SELECT * FROM user_tbl WHERE username = '$username' && pass_user = '$pass' && is_active = 0 && is_pending = 0";
            $check_deactrive_user_result = mysqli_query($con, $check_deactrive_user);
            $check_deactrive_user_nor = mysqli_num_rows($check_deactrive_user_result);

            if($check_deactrive_user_nor > 0){
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>User Error </strong>Account Deactive
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>"; 
            }else{
                $check_active_user = "SELECT * FROM user_tbl WHERE username = '$username' &&  pass_user = '$pass' && is_active = 1 && is_pending = 0";
                $check_active_user_result = mysqli_query($con, $check_active_user);
                $check_active_user_nor = mysqli_num_rows($check_active_user_result);
                $check_active_user_row = mysqli_fetch_assoc($check_active_user_result);

                if($check_active_user_nor > 0){
                    if($check_active_user_row['user_type'] == "admin"){
                        setcookie('login',$check_active_user_row['email'],time()+60*60,'/');
                        $_SESSION['LoginSession'] = $check_active_user_row['email'];
                        header("location:../routes/admin.php");
                    }
                    elseif($check_active_user_row['user_type'] == "user"){
                        setcookie('login',$check_active_user_row['email'],time()+60*60,'/');
                        $_SESSION['LoginSession'] = $check_active_user_row['email'];
                        header("location:../routes/user.php");
                    }
                }
                else{
                    return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Process Error </strong>Can not Process the Task..!
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                    </div>"; 
                }
            }
        }
    }

    function waiting_username(){
        $con = Connection();

        $username = strval($_SESSION['userName']);
        echo $username;
    }

    function forget_pass($username,$email){
        $con = Connection();

        $check_user = "SELECT * FROM user_tbl WHERE is_active = 1 && is_pending = 0";
        $check_user_result = mysqli_query($con, $check_user);
        $check_user_row = mysqli_fetch_assoc($check_user_result);
        $check_user_nor = mysqli_num_rows($check_user_result);

        if($check_user_nor > 0){
            if($check_user_nor['username'] == $username && $check_user_nor['email'] == $email){
                $otp_no = rand(10000,99999);
                $new_otp = md5($otp_no);

                $recever = $email;
                $subject = "Password Reset";
                $body = "OTP For Resent Password";
                $body .= " use the OTP to update Password : " .$otp_no;
                $sender = "From:jehankandy@gmail.com";

                if(mail($recever,$subject,$body,$sender)){
                    $insert_data = "INSERT INTO pass_reset_tbl(username,email,otp_no,get_date)VALUES('$username','$email','$new_otp',NOW())";
                    $insert_data_result = mysqli_query($con, $insert_data);
                    
                    if(!$insert_data_result){
                        return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong> </strong>Can not Process the Task..!
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                        </div>"; 
                    }else{
                        header("location:verify_otp.php");
                        setcookie('Otp',$check_user_row['email'],time()+60*2,'/');
                        $_SESSION['OTP'] = $check_user_row['email'];
                        header("location:../routes/user.php");

                    }
                }
               
            }else{
                return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong> User Error </strong>User Does Not exist..!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                </div>"; 
            }
        }else{
            return  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Process Error </strong>Can not Process the Task..!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
            </div>"; 
        }
    }
?>
