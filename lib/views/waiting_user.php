<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">
<?php include("../layouts/login_nav.php"); ?>
<?php include("../function/function.php"); ?>

<div class="waiting-content">
    <div class="container">
        <div class="card waiting-card">
            <div class="card-header">
                <i class="fas fa-user-clock"></i> Waiting User
            </div>
            <div class="card-body">
                <h5>Hi.. <?php waiting_username();?> </h5>

                <p>Your account approval is still processing</p>
                
                <a href="login.php"><button class="btn btn-primary">Back to Login</button></a>
            </div>
        </div>
    </div>
</div>

<?php include("../layouts/footer_page.php"); ?>
<script src="../../js/script.js"></script>
