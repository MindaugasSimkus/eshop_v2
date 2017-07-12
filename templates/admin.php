<!DOCTYPE html>
<html>
<head>
	<title><?= NAME; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
			<div class="col-sm-12">
			<?php if(isset($msg)) { echo $msg; } ?>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Product</th>
			      <th>Brand</th>
			      <th>Description</th>
			      <th>Price</th>
			      <th>Weight</th>
			      <th>Group</th>
			      <th>Image</th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    <?php
			    	for ($i=0; $i < count($products) ; $i++) { 
			    		$products[$i]['product_group'] = $product_group[$i]['group_name'];
			    	}
			    	foreach ($products as $product) {
						echo '<th>'.$product['id'].'</th>
						<td>'.$product['name'].'</td>
						<td>'.$product['brand'].'</td>
						<td>'.$product['description'].'</td>
						<td>'.$product['price'].'</td>
						<td>'.$product['weight'].'</td>
						<td>'.$product['product_group'].'</td>
						<td><img height="42" width="42" src="product_images/'.$product['image'].'" class="figure-img img-fluid rounded" alt="Product image."></td>
						<td><a href="?id='.$product['id'].'" class="btn btn-danger">Delete</a></td>
						</tr>';
			    	}
			    ?>
			  </tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="container-fluid darken">
		<div class="container">	
			<div class="row">
				<div class="col-sm-12">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-4">
								<label for="product-name" class="col-form-label">Product name</label>
								<input class="form-control" type="text" id="product-name" name="name">
							</div>
							<div class="form-group col-4">
								<label for="brand" class="col-form-label">Brand</label>
								<input class="form-control" type="text" id="brand"  name="brand">
							</div>
							<div class="form-group col-4">
								<label for="group" class="col-form-label">Choose product group</label>
								<select class="form-control" id="group" name="group">
								    <option value="1">Food</option>
								    <option value="2">Transport</option>
								    <option value="3">Household goods</option>
								    <option value="4">Services</option>
								    <option value="5">Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
						    <label for="description">Description</label>
						    <textarea class="form-control" id="description" rows="3"  name="description"></textarea>
						</div>
						<div class="row">
							<div class="form-group col-4">
								<label for="price" class="col-form-label">Price</label>
								<input class="form-control" type="text" id="price"  name="price">
							</div>
							<div class="form-group col-4">
								<label for="weight" class="col-form-label">Weight</label>
								<input class="form-control" type="text" id="weight"  name="weight">
							</div>
							 <div class="form-group col-4">
								<label for="image">Image upload</label>
								<input type="file" class="form-control form-control-file" id="image" aria-describedby="fileHelp" name="image">
							</div>
						</div>
						<button class="btn btn-default" action="submit">Add product</button>
						<a href="logout.php" class="btn btn-danger">Log out</a>
					</form>
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