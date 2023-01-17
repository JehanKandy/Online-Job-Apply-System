<?php include("../function/function.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/header.php"); ?>
<?php include("../layouts/login_nav.php"); ?>

<div class="update-pass-content">
    <div class="container">
        <div class="card login-card">
            <div class="card-header">
                <i class="fas fa-key"></i> Update Password
            </div>
            <div class="card-body login-card-body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST" name="update_pass" onsubmit="return valide_updatePass();">
                    <p class="form-text" id="updatePassU">Username : </p>
                    <input type="text" name="username" id="updatePassUser" class="form-control form-input">
                    <p id="updatePuserError"></p>

                    <p class="form-text" id="updatePassE">Email : </p>
                    <input type="email" name="email" id="updatePassEmail" class="form-control form-input">
                    <p id="updatePemailError"></p>

                    <p class="form-text" id="updatePassp">New Password :</p>
                    <input type="password" name="new_pass" id="updatePasspass" class="form-control">
                    <p id="updatePpassError"></p>

                    <p class="form-text" id="updatePasscp">Confirm New Password : </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
