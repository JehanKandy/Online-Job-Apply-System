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
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
