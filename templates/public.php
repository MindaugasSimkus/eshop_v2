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
			<div class="row">
				<div class="col-sm-10"></div>
				<div class="col-sm-2"><a href="logout.php" class="btn btn-danger">Log out</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php if(!empty($GLOBALS['msg'])) echo $GLOBALS['msg']; ?>
				<div class="card-deck">
				    <?php
				    	foreach ($products as $product) {
			    		echo '<div class="card" >
								  <img class="card-img-top" style="max-width: 100%" src="product_images/'.$product['image'].'" alt="Card image cap">
								  <div class="card-block">
								    <h4 class="card-title">'.$product['name'].' by '.$product['brand'].'</h4>
								    <p class="card-text">'.$product['description'].'</p>
								  </div>
								  <div class="card-footer">
									  <small class="text-muted"> Price: '.$product['price'].'</small>
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