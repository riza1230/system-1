<?php 
  define('DB_HOST', 'localhost');
  define('DB_DATABASE', 'com');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');

  // Email Credentials
  // define('SMTP_HOST', 'smtp.gmail.com');
  // define('SMTP_PORT', 465);
  // define('SMTP_USERNAME', 'mdvh28@gmail.com');
  // define('SMTP_PASSWORD', 'lwtmegvsvdvafuds');
  // define('SMTP_FROM', 'noreply@mydomain.com');
  // define('SMTP_FROM_NAME', 'mau');

  $conn = mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_DATABASE);
?>