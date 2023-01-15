<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/login_nav.php"); ?>

<div class="forget-pass">
    <div class="container">
        <div class="card login-card">
            <div class="card-header">
                <i class="fas fa-key"></i> &nbsp; Forget Password
            </div>
            <div class="card-body login-card-body">
                <?php 
                    include("../function/function.php");
                    if(isset($_POST['request_otp'])){
                        $result = forget_pass($_POST['userName'], $_POST['passEmail']);
                        echo $result;
                    }
                ?>

                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="request_otp" onsubmit="return otp_validate();">
                    <p class="form-text" id="username">Username : </p>
                    <input type="text" name="userName" id="passunser" class="form-control form-input">
                    <p id="usernError"></p>

                    <p class="form-text" id="email">Email : </p>
                    <input type="email" name="passEmail" id="passemail" class="form-control form-input">
                    <p id="passError"></p> 
                    
                    <input type="submit" value="Request OTP" class="btn btn-primary login-btn-form" name="request_otp">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
