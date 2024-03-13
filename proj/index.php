<?php

session_start();
include "fun.php";

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working on it</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="land"></div>
    <div id="load">
        <div>G</div>
        <div>N</div>
        <div>I</div>
        <div>D</div>
        <div>A</div>
        <div>O</div>
        <div>L</div>
      </div>

      <?php
        foreach (obtenerPaises() as $datosPaises) {
        ?>

            <div id="land">
            <section class="layout">
            <div class="grow1"><h1 class="title"><?php echo $datosPaises['Name'] ?></h1></div>
            <div class="grow1"><p><?php echo $datosPaises['CountryCode'] ?></p></div>
            <div class="grow1"><p><?php echo $datosPaises['District'] ?></p></div>
            <div class="grow1"><p><?php echo $datosPaises['Info'] ?></p></div>
            </section>
            </div>
            
            <?php
            }
            ?> 
    
      <script src="prub.js"></script>
</body>
</html>