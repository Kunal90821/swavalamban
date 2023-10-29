<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pictures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <link rel="shortcut icon" href="../images/logo.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/main_gallery.css">


</head>

<body>

  <div class="container-fluid">

    <div class="row mt-4">

      <?php

      include '../dbcon.php';

      $category = $_POST["category"];

      $selectquery = "select * from gallery where category = '$category'";

      $query = mysqli_query($con, $selectquery);
      ?>


      <?php

      while ($result = mysqli_fetch_array($query)) {

      ?>

        <div class="item col-sm-6 col-md-4 mb-3">
          <a href="../images/gallery/<?php echo $result['image']; ?>" class="fancybox" data-fancybox="gallery">
            <img src="../images/gallery/<?php echo $result['image']; ?>" width="100%" height="100%">
          </a>
        </div>

      <?php
      }

      $selectquery = "select * from videos where category = '$category'";

      $query = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($query)) {

      ?>
        <div class="item col-sm-6 col-md-4 mb-3">
          <iframe width="100%" height="100%" src="<?php echo $result['videos']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      <?php
      }

      ?>

    </div>

  </div>



</body>

</html>