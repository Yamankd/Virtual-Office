<?php
session_start();
$pagetitle = "dashboard";
require "includes/header.php";
require "includes/navbar.php";
if(!isset($_SESSION['auth_user'])){
    $_SESSION['status'] = "You need to Login to access dashboard";
    echo "
    <script>
     window.location.href = 'index.php';
    </script>
    ";
    exit(0);
  }else{
?>
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
        if(isset($_SESSION['status'])){
        ?>
        <div class="alert alert-success">
         <?php
         echo $_SESSION['status'];
         ?>
        </div>
        <?php
        }
        unset($_SESSION['status']);
        ?>
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Your account Information</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group mb-3">
                        <div class="h3">Name : <?php echo $_SESSION['auth_user']['user'];?></div>
                      </div>
                      <div class="form-group mb-3">
                        <div class="h3">Email : <?php echo $_SESSION['auth_user']['email']; ?></div>
                      </div>
                      <form action="workspace.php" method="post" enctype="multipart/form-data">
                      <div class="form-group mb-3">
                        <button class="btn btn-secondary" name="goto">GO TO Workspace</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
require "includes/footer.php";
?>