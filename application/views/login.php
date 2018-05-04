<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
 
    <link href="<?php echo base_url()."asset/css/login.css"; ?>" rel="stylesheet">
</head>
<body>
<div id="login-button">
  <img src="<?php echo base_url()."asset/css/login-w-icon.png"?>">
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img src="<?php echo base_url()."asset/css/circle_close_delete_-128.png"; ?>"></img>
  </span>

  <form method="POST" action="<?php echo base_url()."index.php/Login/aksi_login"; ?>">
  <?php echo "<i style='text-align: center; color: red;'>".validation_errors()."</i>"?>
  <?php echo "<i style='text-align: center; color: red;'>".$this->session->flashdata('pesan')."</i>" ?>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type='submit' value="Log In" style="background-color:green;" >
 
</form>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="<?php echo base_url()."asset/js/login.js"; ?>"></script>
</body>

</html>