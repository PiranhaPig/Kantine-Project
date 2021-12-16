<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='stylemenu.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300&family=Source+Code+Pro&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        body{
            background-image: url(images/loginbg.png);
            background-repeat: no-repeat;
          background-size: cover;
        }
    </style>
</head>
<body>

<div class="loginText">
    <img id="loginLogo" src="images/vista kantine.png" alt="logo">
<form method="post" action="login.php">
 <input class="textLg" placeholder="Enter username"  name="username"> <br>
 <input class="textLg" placeholder="Enter password" type="password" name="pwd"> <br>
 <button class="submitBtn">Log In</button>
</form>
</div>
</body>
</html>