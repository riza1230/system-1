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
          <li class="nav-item">
            <a class="nav-link active" href="./../logout.php"><i class="fa-solid fa-right-from-bracket"></i><b> Logout</b></a>
          </li>
        </ul>
      </div>
  </div>
</nav>

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-lg-9 col-xl-7">
      <div class="card shadow">
          <?php require_once __DIR__ . "./profile-content.php"; ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>