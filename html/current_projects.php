<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cproject.css">
  <link rel="shortcut icon" href="../images/logo.png" />
</head>

<body>
  <section class="section-6">
    <div class="heading">
      <h1>Our Current Projects</h1>
    </div>
    <div class="row">
      <?php

      include '../dbcon.php';

      $selectquery = "select * from current_projects";

      $query = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($query)) {
      ?>
        <figure class="figure">
          <img src="../images/<?php echo $result['image']; ?>">
          <figcaption>
            <h3><?php echo $result['name']; ?></h3>
          </figcaption>
        </figure>
      <?php
      }
      ?>
    </div>
  </section>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!-- partial -->
</body>

</html>