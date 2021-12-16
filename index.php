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
    <title>Vista kantine</title>

 <style>
    body{
    background-color: #b0cdd1;
    margin-left: -7px;
    }
</style>


</head>
<body>
    <?php
echo $objMenu->getMenu(); 
?>

<div class="container">
  <div class="row">
    <div class="column-66">
      <h2> Ontdek ons aanbod van heerlijke broodjes. </h2>
     <a href=broodjes.php> <button class="hmButton"><h3>Bekijk</h3></button></a>
    </div>
    <div class="column-33">
        <img id="broodjes" src="images/broodjes.jpg">
    </div>
  </div>
</div>
  </div>
  <div class="container" style="background-color:#fcddd6">
  <div class="row">
    <div class="column-66">
    <img id="drinks" src="images/drinks.jpg">
    </div>
    <div class="column-33">
      <h2> Bekijk onze selectie van verfrissende drankjes.</h2>
    <a href=drankjes.php><button class="hmButton2"><h3>Bekijk</h3></button></a>
    </div>
  </div>
</div>


hoi

</body>
</html>