<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="shortcut icon" href="../images/logo.png">
</head>
</head>
<body>
    <section class="intro">
            <div class="intro-slideshow">

                <?php

      include '../dbcon.php';

      $selectquery = "select * from banner";

      $query = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($query)) {

      ?>
        
                <img src="../<?php echo $result['image']; ?>">

    <?php
      }
      ?>
            </div>
        </section>

        <script src="../js/slideshowImages.js"></script>

</body>
</html>