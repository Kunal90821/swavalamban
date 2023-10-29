<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Glimpses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<link rel="stylesheet" href="../css/glimpses_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h1>Glimpses</h1>

	<!-- ==================================== 
	Contenedor Slider 
	=======================================-->
 <?php

      include '../dbcon.php';

      $selectquery = "select * from glimpses";
	   
	  $query = mysqli_query($con, $selectquery);

      while ($result = mysqli_fetch_array($query)) {
      ?>
<section class="main">	
	
	<section id="slider" class="container">
		<ul class="slider-wrapper">
		<li class="current-slide">
			<img src="../images/<?php echo $result['image']; ?>" title="" alt="">

			<div class="caption">
				<h2 class="slider-title"><?php echo $result['title']; ?></h2>
			</div>
		</li>
		</ul>
		<div class="slider-shadow"></div>
	</section>

	<div class="card">
		<h2><?php echo $result['title']; ?></h2>
		<p>
			<?php echo $result['description']; ?>

		</p>
	</div>
	
</section>	
	  <?php
	  }
	  ?>

</body>
</html>
