<?php 
    require_once __DIR__ . "./../../includes/header.php";
    require_once __DIR__ . "./../../dependency/phpqrcode/qrlib.php";
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    $row = mysqli_fetch_assoc($query);
?>


<title>Profile</title>
<nav class="navbar navbar-expand border shadow-sm">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-md-0">
        <!-- <li class="nav-item">
          <a class="nav-link active " href="./edit-profile.php">
		  <i class="fa-regular fa-pen-to-square"></i>
		  <b> Edit Profile</b></a>
        </li> -->
		<li class="nav-item">
          <a class="nav-link active" href="./../logout.php">
		  <i class="fa-solid fa-right-from-bracket"></i>	
		  <b> Logout</b></a>
        </li>
    </div>
  </div>
</nav>
                      
                     

<!-- <div class="container py-5 mt-3">
   <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-4">
         <div class="card shadow">
            <div class="card-body text-center">
               <div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-lg-9 col-xl-7">
      <div class="card shadow">
        <!-- <a href="https://www.freepik.com/free-vector/gradient-liquid-abstract-background_13403524.htm#query=background&position=1&from_view=search&track=aitest">Image by pikisuperstar</a> on Freepik -->
        <div class="rounded-top d-flex text-white flex-row" style="background-image: url('./../../includes/public/images/cover.jpg'); background-repeat: no-repeat;background-size: cover; height:220px;">
          <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
            <i class="fa-solid fa-user mb-3 d-block text-center" style="font-size: 5rem;"></i>
            <button type="button" class="btn btn-light shadow" style="z-index: 1;">
              Edit profile
            </button>
          </div>
          <div class="ms-3" style="margin-top: 130px;">
            <h5> <?php echo $row['firstname']; ?>
                      <?php echo $row['middlename']; ?>
                      <?php echo $row['lastname']; ?></h5>
            <p><?php echo $row['id']; ?></h5></p>
          </div>
        </div>
        <div class="card-body p-4 text-black">
            <p class="lead fw-normal mb-1">About</p>
            <div class="p-4" style="background-color: #f8f9fa;">
              <p class="font-italic mb-1">Web Developer</p>
              <p class="font-italic mb-1">Lives in New York</p>
              <p class="font-italic mb-0">Photographer</p>
          </div>
        </div>
       <div class="text-center">
       </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>