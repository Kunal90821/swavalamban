<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/gallery.css">
	<link rel="shortcut icon" href="../images/logo.png" />
</head>

<body>

	<h1>Gallery</h1>
	<h2 class="sub_head">The Memory Treasure</h2>

	<div class="container">

		<form action="main_gallery.php" method="post" target="blank">

			<?php

			include '../dbcon.php';

			$selectquery = "SELECT * FROM events ORDER BY RAND() LIMIT 2";

			$query = mysqli_query($con, $selectquery);

			while ($result = mysqli_fetch_array($query)) {

			?>

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-3 col-xs-12">
							<div class="hovereffects">
								<img src="../<?php echo $result['image']; ?>" height="400px" width="100%">
								<div class="overlay">
									<h2><?php echo $result['category']; ?></h2>
									<button type="submit" name="category" value="<?php echo $result['category']; ?>">View more</button>
								</div>
							</div>

						</div>


					<?php
				}

					?>
		</form>
	</div>
	<div class="more">
		<a href="full_gallery.php" class="button" target="blank">View More</a>
	</div>

</body>

</html>