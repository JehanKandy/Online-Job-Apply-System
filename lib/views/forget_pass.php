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
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <p class="form-text" id="username">Username : </p>
                    <input type="text" name="userName" id="passunser" class="form-control form-input">
                    <p id="usernError"></p>

                    <p class="form-text" id="email">Email : </p>
                    <input type="email" name="passEmail" id="passemail" class="form-control form-input">
                    <p id="passError"></p> 
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
