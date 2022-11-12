<?php 
   require_once __DIR__ . "./includes/header.php";
   require_once __DIR__ . './controllers/mailer-verification.php';
    if (isset($_SESSION['SESSION_EMAIL'])) 
    { 
        $query = mysqli_query($conn, "SELECT privilage FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
        $type = mysqli_fetch_assoc($query);
        if($type['privilage']==='admin'){
            header("Location: ./views/admin/dashboard.php"); die();
        }
        else{
            header("Location: ./views/user/profile.php"); die();
            
        }
    }
?>
<?php echo $msg  ?>
   <title>Sign In</title>

   <div class="container-fluid d-flex min-vh-100 align-items-center justify-content-center">
      <div class="card text-center  p-2 shadow">
         <div class="card-body ">

            <img src="./includes/public/images/oss-logo.png" alt="" style="height: 5rem;">
            <h1 class=""><b> Sign In</b></h1>

            <form action="" method="POST" class="p-1">
               <input type="email" class="form-control mt-2" name="email" placeholder="Enter Your Email" autocomplete="username" required>
               <input type="password" class="form-control mt-3" name="password" placeholder="Enter Your Password" autocomplete="current-password" required>
               <button name="submit" class="btn btn-outline-primary mt-3" type="submit"><b>Login</b></button>
            </form>

            <a href="./views/register/register.php" role="button" class="btn btn-primary d-block mt-3"><strong>Register</strong> </a>
            <a href="./views/forgot-password.php" role="button" class="btn btn-secondary d-block mt-2"><strong>Forgot Password?</strong> </a>
            
         </div>
      </div>
   </div>
</body>
</html>