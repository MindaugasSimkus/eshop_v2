<?php


function alert($is_success = TRUE, $text = "") {
	if($is_success) {
		$msg = '<div class="alert alert-success" role="alert"><strong> Well done!</strong> '.$text.'</div>';
	} else {
		$msg = '<div class="alert alert-danger" role="alert"><strong> Oh snap!</strong> '.$text.'</div>';
	}
}


function add_product($conn) {
	// gaunam paveiksliuko pletini (jpg, gif, png ar kt)
	$file_extension = explode(".", $_FILES['image']['name'])[1];

	//susikonstruojam nauja unikalu failo pavadinima
	$image_filename = $_POST['name'] . "_" . $_POST['brand'] . "_" . rand(11111, 99999) . "." . $file_extension;

	// bandom kelti i nurodyta vieta serveryje is TEMP direktorijos
	if (move_uploaded_file($_FILES['image']["tmp_name"], "product_images/" . $image_filename)) {
       alert(TRUE, "The file ". basename( $_FILES['image']["name"]). " has been uploaded.");
    } else {
       alert(FALSE, "Sorry, there was an error uploading your file.");
    }

    // suformuojama užklausa naujai preke įrašyti
    $sql = "INSERT INTO products (name, brand, description, price, weight, image) VALUES (
    '".$_POST['name']."', 
    '".$_POST['brand']."', 
    '".$_POST['description']."',
    '".$_POST['price']."',
    '".$_POST['weight']."',
    '".$image_filename."'
    )"; 

    // ivykdome užklausą
	if(mysqli_query($conn, $sql)) {
        alert(TRUE, "Product added.");
    } else {
        alert(FALSE, "Product was not added.");
    }

}


function get_products($conn) {

    // suformuojam užklausą visiems įrašams gauti
    $sql = "SELECT * FROM products";

    // įvykdom užklausą
    $result = mysqli_query($conn, $sql);

    // susikuriame prekių array, kuriame laikysime prekes
    $products = [];

    // jei mysql atsakyme eilučių yra daugiau nei viena...
    if (mysqli_num_rows($result) > 0) {
        // kol yra eilučių su duomenimis...
        while($row = mysqli_fetch_assoc($result)) {
            // tas eilutes surašome į masyvą.
            array_push($products, $row);
        }
    } else {
        alert(FALSE, "0 results found");
    }

    // gražinam rezultatus
    return $products;
}

function delete_product($conn, $id) {

    // suformuojama užklausa prekei istrinti
    $sql = "DELETE FROM products WHERE id = " . $id; 

    // ivykdome užklausą
    if(mysqli_query($conn, $sql)) {
        alert(TRUE, "Product deleted.");
    } else {
        alert(FALSE, "Product was not deleted.");
    }

}