<!DOCTYPE html>
<html>
<head>
	<title><?= NAME; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid darken">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?= NAME;?></h1>
					<p class="lead">This is CodeAcademy eshop.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card-deck">
				<?php if(isset($msg)) { echo $msg; } ?>

				    <?php
				    	foreach ($products as $product) {
			    		echo '<div class="card" >
								  <img class="card-img-top" style="max-width: 300px; max-height: 180px;" src="product_images/'.$product['image'].'" alt="Card image cap">
								  <div class="card-block">
								    <h4 class="card-title">'.$product['name'].' by '.$product['brand'].' with cost '.$product['price'].'</h4>
								    <p class="card-text">'.$product['description'].'</p>
								  </div>
								</div>';
				    	}
				    ?>
				</div>
			</div>
			<div class="col-md-2"></div>	
	
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center"><small><?= FOOTER;?></small></div>
		</div>
	</div>
</body>
</html>