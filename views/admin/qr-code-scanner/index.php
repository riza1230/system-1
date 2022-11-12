<!DOCTYPE html>
<html>
  <head>
    <title>Scanner</title>
    <!-- WebRTC for real-time video device connection -->
    <!-- Instascan real-time webcam-driven HTML5 QR code scanner. -->
    <script src="javascript/instascan.min.js"></script>
    <script src="javascript/webrtc-adapter.js"></script>
    <link rel="shortcut icon" href="#">
    <style><?php include_once "./public/style.css"?></style>
  </head>

  <body >
    <div class="container">
      <div class="container-video">
        <video id="preview"></video>
      </div>

      <form method="POST" name="scanned">
        <label>SCAN QR CODE</label>
        <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
      </form>

 
      <?php  
        include_once "instascan.php";
        include_once "./database/db_conn.php";
        include_once "./database/db_insert.php";
      ?>
    </div>

    

  <script> 
      document.addEventListener('DOMContentLoaded',() => {
         autovanish();
      });

      function autovanish(){
      const avDivs = document.getElementsByClassName('success');
      if (avDivs.length){
         setTimeout(function(){
             avDivs[0].remove();
         }, 3000); //removes the element after 3000ms
      }
   }
  </script>


  </body>
</html>