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
				<div class="col-sm-10">
					<form class="form-inline" action="" method="POST">
						<div class="form-group">
							<label for="group" class="col-form-label">Choose product group you want to see: </label>
							<select class="form-control mx-sm-3" id="group_public" name="group_public" onchange="this.form.submit()" >
								<option selected disabled hidden>Select form list</option>
								<option value="x">See all products</option>
							    <option value="1">Food</option>
							    <option value="2">Transport</option>
							    <option value="3">Household goods</option>
							    <option value="4">Services</option>
							    <option value="5">Other</option>
							</select>
							<noscript><input type="submit" value="Submit"></noscript>
						</div>
					</form>
				</div>	
				<div class="col-sm-2">
					<a href="logout.php" class="btn btn-danger">Log out</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<h2 style="text-transform: uppercase">
				<?php 
					if (isset($_POST['group_public']) && $_POST['group_public'] !== "x") {
						echo $groups[$_POST['group_public']-1]['group_name'];
					} elseif (!isset($_POST['group_public']) || $_POST['group_public'] =="x")  { 
						echo "All products";
					}
				?>
			</h2>
		</div>
		<div class="row"><hr style="width: 100%; color: black; height: 1px; background-color:lightgrey;" /></div>
		<div class="row">
			<div class="col-md-12">
				<?php if(!empty($GLOBALS['msg'])) echo $GLOBALS['msg']; ?>
				<div class="card-deck">
				    <?php
				    	if (isset($_POST['group_public']) && $_POST['group_public'] !== "x") {
					    	foreach ($products as $product) {
					    		if ($product['product_group'] == $_POST['group_public']) {
						    		echo '<div class="card" >
											  <img class="card-img-top" style="max-width: 100%" src="product_images/'.$product['image'].'" alt="Card image cap">
											  <div class="card-block">
											    <h4 class="card-title">'.$product['name'].'</h4><h6><small style="color:grey"> by '.$product['brand'].'</small></h6><br/>
											    <p style="font-size: 12px;" class="card-text">'.$product['description'].'</p>
											  </div>
											  <div class="card-footer">
												  <small class="text-muted"> Price: '.$product['price'].'</small>
											  </div>
											</div>';
					    		} 
					    	}
					    } elseif (!isset($_POST['group_public']) || $_POST['group_public'] =="x")  {
					    	foreach ($products as $product) {
					    		echo '<div class="card" >
										  <img class="card-img-top" style="max-width: 100%" src="product_images/'.$product['image'].'" alt="Card image cap">
										  <div class="card-block">
										   <h4 class="card-title">'.$product['name'].'</h4><h6><small style="color:grey"> by '.$product['brand'].'</small></h6><br/>
										    <p style="font-size: 12px;" class="card-text">'.$product['description'].'</p>
										  </div>
										  <div class="card-footer">
											  <small class="text-muted"> Price: '.$product['price'].'</small>
										  </div>
										</div>';
					    		
					    	}
					    }

				    ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center"><small><?= FOOTER;?></small></div>
		</div>
	</div>
</body>
</html>