<?php
$title = "Welcome to Moody's Portfolio";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/
all.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Moody</a>

        <div id="menu-bar" class="fas fa-bars"></div>
        <ul class="navbar">
            <li><a href="#" id='home-link'>Home</a></li>
            <li><a href="#sec">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </header>
            <section>
                <img src="IMAGES/sun1.png" id="sun">
                <img src="IMAGES/clouds2.png" id="clouds">
                <img src="IMAGES/bg1.png" id="valley">  
                <img src="IMAGES/Mbg.png" id="mbg">   
            </section>
        <div class ="sec" id='sec'>
            <br>
            <h2>
            Hi I'm Moody a Software Developer
            </h2>
            <br>
            <br>
            <br>
        </div>

        <script src="script.js"></script>

</body>
</html>