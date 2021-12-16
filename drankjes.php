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
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300&family=Source+Code+Pro&family=Ubuntu&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista kantine drankjes</title>

    <style>
        body {
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
<h1 style=font-size:50px>Drankjes:</h1>
<h2>
Aa Energy €1,50 <br>
Aquarius €1,70 <br>
Sinasappelsap €1,10<br>
Appelsap €1,10 <br>
Fuze tea perzik €1,50 <br>
Fanta €1,50 <br>
Coca cola blikje €1,10 <br>
Sprite blikje €1,10 <br>
Lipton Ice tea Lemon €1,50 <br>
Spa blauw €1,10 <br>
Koffie € 1,30 <br>
    </h2>


</body>

</html>