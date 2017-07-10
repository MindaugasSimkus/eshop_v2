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
			      <th>Image</th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    <?php
			    	foreach ($products as $product) {
						echo '<th>'.$product['id'].'</th>
						<td>'.$product['name'].'</td>
						<td>'.$product['brand'].'</td>
						<td>'.$product['description'].'</td>
						<td>'.$product['price'].'</td>
						<td>'.$product['weight'].'</td>
						<td><img height="42" width="42" src="product_images/'.$product['image'].'" class="figure-img img-fluid rounded" alt="Product image."></td>
						<td><a href="?id='.$product['id'].'" class="btn btn-danger">Delete</></td>
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
							<div class="form-group col-6">
								<label for="product-name" class="col-form-label">Product name</label>
								<input class="form-control" type="text" id="product-name" name="name">
							</div>
							<div class="form-group col-6">
								<label for="brand" class="col-form-label">Brand</label>
								<input class="form-control" type="text" id="brand"  name="brand">
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
						<a href="logout.php" class="btn btn-danger">Log out</>
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