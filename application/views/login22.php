<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo base_url()."index.php/Login/aksi_login" ?>">
     <input type="text" name="username">
     <input type="password" name="password">
     <button type="submit">Log in</button>
    </form>
    
</body>
</html>