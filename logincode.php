<?php
session_start();
require "connect.php";
if (isset($_POST['login'])) {
    if (!empty(trim($_POST['username'])) && !empty(trim($_POST['password']))) {
        $name = $_POST['username'];
        $sql = "SELECT * FROM users where Name = '$name' or Email = '$name';";
        $result = mysqli_query($con,$sql);
        if($result>0){
           $password = $_POST['password'];
           $nsql = "SELECT * from users where Name = '$name' and Password = '$password';";
           $nquery = mysqli_query($con,$nsql);
           if($nquery>0){
            $data = mysqli_fetch_assoc($nquery);
            $_SESSION['auth_user'] = [
                "user" => $data['Name'],
                "email" => $data['Email']
            ];
            $_SESSION['status'] = "you are successfully logged in";
            echo "
       <script>
        window.location.href = 'dashboard.php';
       </script>
       ";
       exit(0);

           }else{
            $_SESSION['status'] = "Some error occured while during login. Try again!";
            echo "
       <script>
        window.location.href = 'index.php';
       </script>
       ";
       exit(0);
           }
        }else{
            $_SESSION['status'] = "Account not registered";
            echo "
       <script>
        window.location.href = 'index.php';
       </script>
       ";
       exit(0);
        }

    } else {
        $_SESSION['status'] = "All fields are mandatory";
        echo "
       <script>
        window.location.href = 'index.php';
       </script>
       ";
       exit(0);
    }
}
