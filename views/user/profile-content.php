<!-- <a href="https://www.freepik.com/free-vector/gradient-liquid-abstract-background_13403524.htm#query=background&position=1&from_view=search&track=aitest">Image by pikisuperstar</a> on Freepik -->
<div class="rounded-top d-flex text-white flex-row" style="background-image: url('./../../includes/public/images/cover.jpg'); background-repeat: no-repeat;background-size: cover; height:220px;">
   <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
      <i class="fa-solid fa-user mb-3 d-block text-center" style="font-size: 5rem;"></i>
      <button type="button" class="btn btn-light shadow" style="z-index: 1;">
      <b>Edit</b>
      </button>
   </div>
   <div class="ms-3" style="margin-top: 130px;">
      <h5>
         <?php echo $row['firstname']; ?>
         <?php echo $row['middlename']; ?>
         <?php echo $row['lastname']; ?>
      </h5>
      <p><?php echo $row['schoolID']; ?></p>
   </div>
</div>
<div class="card-body  text-black">
   <p class="lead fw-normal "><b>About</b></p>
   <div class="p-2" style="background-color: #f8f9fa;">
      <p class="mb-1">First Name: <?php echo $row['firstname']; ?>  </p>
      <p class="mb-1">Middle Name: <?php echo $row['middlename']; ?></p>
      <p class="mb-0">Last Name: <?php echo $row['lastname']; ?> </p>
   </div>
</div>
<div class="card-body text-black">
   <p class="lead fw-normal"><b>School Information</b></p>
   <div class="p-2" style="background-color: #f8f9fa;">
      <p class="mb-1">Course: <?php echo $row['course']; ?></p>
      <p class="mb-1">Department: <?php echo $row['department']; ?> </p>
      <p class="mb-0">Year Level: <?php echo $row['yearlevel']; ?></p>
   </div>
</div>
<div class="text-center">
   <?php 
      //data to be stored in qr
      $text = "PRODUCT ID 9999";
      
      //file path
      $file = "images/qr1.png";
      
      //other parameters
      $ecc = 'H';
      $pixel_size = 7;
      $frame_size = 5;
      
      // Generates QR Code and Save as PNG
      QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
      
      // Displaying the stored QR code if you want
      echo "<img src='".$file."'>";
      ?>
</div>
<div class="text-center">
   <button class="btn btn-outline-dark mb-3"><a href="./images/qr1.png" download="qrcode" style="text-decoration: none; color: black;">Download</a></button>
</div>
</div>
</div>