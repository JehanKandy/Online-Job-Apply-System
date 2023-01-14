<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/login_nav.php"); ?>

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        <i class="fas fa-user-plus"></i> &nbsp; Register
    </div>
    <div class="card-body login-card-body">
        <?php 
            if(isset($_POST['register'])){
                $result = reguser($_POST['userName'], $_POST['useremail'], md5($_POST['passWord']));
                echo $result;
            }
        ?>

        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="reg_form" onsubmit="return validate_reg(); ">
            <p class="form-text" id="regusername">Username : </p>
            <input type="text" name="userName" id="regusern" class="form-control form-input">
            <p id="usernError"></p>

            <p class="form-text" id="regemail">Email : </p>
            <input type="email" name="useremail" id="emailuser" class="form-control form-input">
            <p id="emailError"></p>

            <p class="form-text" id="regpassword">Password : </p>
            <input type="password" name="passWord" id="regpassn" class="form-control form-input">
            <p id="passError"></p>

            <p class="form-text" id="regcpassword">Confirm Password : </p>
            <input type="password" name="cpassWord" id="regcpassn" class="form-control form-input">
            <p id="cpassError"></p>

            <input type="submit" value="Register" class="btn btn-primary login-btn-form" name="register">
        </form>
        <p>Already have an Account ? <a href="login.php" style="color: rgb(123, 8, 231);">Login</a></p>
    </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
