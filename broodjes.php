<?php
require_once("clsMenu.php");
$objMenu = new Menu();
$objMenu->addItems('Log_in', 'topButton1', 'loginpage.php');
$objMenu->addItems('Drankjes', 'topButton2', 'drankjes.php');
$objMenu->addItems('Broodjes', 'topButton3', 'broodjes.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel='stylesheet' href='stylemenu.css'>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300&family=Source+Code+Pro&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300&family=Source+Code+Pro&family=Ubuntu&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista kantine broodjes</title>

 <style>
    body{
    background-color: #b0cdd1;
    margin-left: -7px;
    }
    br{
        margin-top:40px
    }
</style>


</head>
<body>
  <?php
echo $objMenu->getMenu(); 
?>
<br>
<br>
<br>
<h1 style=font-size:50px>Broodjes:</h1>
<h2>
Broodje pittige kip €3,20<br>
Broodje pittige kip met bacon €3,30<br>
Broodje mozzarella €3,-<br>
Broodje tonijn salade €3,-<br>
Broodje pittige tonijn salade €3,-<br>
Broodje sate €2,50 <br>
Broodje gezond met kaas €2,30 <br>
Broodje gezond met hamkaas €2,30<br>
</h2>
</body>
</html>