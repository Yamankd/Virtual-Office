<?php
session_start();
$pagetitle= "login";
require "includes/header.php";
require "includes/navbar.php";
?>
 <div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
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
         <div class="card">
          <div class="card-header  text-center">
            <h3>Login To Your Account</h3>
          </div>
          <div class="card-body">
            <form action="logincode.php" method="post" enctype="multipart/form-data">
              <div class="form-group mb-3">
                <h5><label for="name">User Name</label></h5>
                <input type="text" class="form-control" placeholder="Enter your Username or Email" name="username">
              </div>
              <div class="form-group mb-3">
                <h5><label for="name">Password</label></h5>
                <input type="text" class="form-control" placeholder="Enter your Password" name="password">
              </div>
              <div class="form-group mb-3">
                <button class="btn btn-primary" name="login">Login</button>
              </div>
            </form>
          </div>
         </div>
      </div>
    </div>
  </div>
 </div>
<?php
require "includes/footer.php";
?>