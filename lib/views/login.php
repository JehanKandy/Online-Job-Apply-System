<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/login_nav.php"); ?>


<div class="container">
    <div class="card login-card">
    <div class="card-header">
        <i class="fas fa-user-alt"></i> &nbsp; Login
    </div>
    <div class="card-body login-card-body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="login_form" onsubmit="returm validate_login(); ">
            <p class="form-text" id="username">Username : </p>
            <input type="text" name="userName" id="usern" class="form-control form-input">
            <p class="usernError"></p>

            <p class="form-text" id="password">Password : </p>
            <input type="password" name="passWord" id="passn" class="form-control form-input">

            <input type="submit" value="Login" class="btn btn-primary login-btn-form" name="login">
        </form>
        <p>Don't have an Account ? <a href="reg.php" style="color: rgb(123, 8, 231);">Sign Up</a></p>
        <p>Forget Password ? <a href="forget_pass.php" style="color:rgb(123, 8, 231);">Forget Password</a></p>
    </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
