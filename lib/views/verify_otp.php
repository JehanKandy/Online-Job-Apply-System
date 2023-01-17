<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/login_nav.php"); ?>

<?php 
    include("../function/function.php");

    if(empty($_SESSION['OTP'])){
        header("location:login.php");        
    }
?>

<div class="verify-otp">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-key"></i> Verify OTP
            </div>
            <div class="card-body">
                <?php 
                    if(isset($_POST['otp_verify'])){
                        $result = verify_otp(md5($_POST['otp_no']));
                        echo $result;
                    }
                ?>

                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="veryfy_otp" onsubmit="return validate_userOtp(); ">
                    <p class="form-text" id="otp_no">Enter OTP : </p>
                    <input type="number" name="otp_no" id="otpInput" class="form-control form-input">
                    <p id="otpError"></p>

                    <input type="submit" value="Verify OTP" name="otp_verify" class="btn btn-primary login-btn-form">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
