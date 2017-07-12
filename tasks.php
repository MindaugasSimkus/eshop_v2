<pre>
<?php 

// $skaiciai = array(1, 25, 33, 2, 456, 123, 99, "devil_inside_me");
//  print_r ($skaiciai);


// function ieskom($array, $element) {
// 	if ($key = array_search($array, $element)) {

// 		echo "element exists in " .$key." position";
// 	} else {
// 		echo "element does not exists";
// 	}
// }
// ieskom("2", $skaiciai);

// function area($radius) {
// 	$area = pi()*$radius*$radius;
// 	return $area;
// }

//echo $s =  area(3);


// function area2($a, $b, $h) {
// 	$area = (($a + $b)/2)*$h;
// 	return $area;
// }

// echo $s =  area2(4, 1, 9);

// function get_pallet_count ($ap, $pal_t, $a, $b) {
// 	$pal_kiekis = ceil(($ap/($a*$b))/$pal_t);
// 	return $pal_kiekis;
// }

// echo get_pallet_count(20000, 1000, 0.2, 0.2) . " paleciu";


// $a = [
// 	['name' => 'Delfi', 'url' => 'http://delfi.lt'],
// 	['name' => '15min.lt', 'url' => 'http://15min.lt'],
// 	['name' => 'Code Academy', 'url' => 'http://codeacademy.lt']
// ];
// function sites($array) {
// 	foreach ($array as $link) {
// 	echo "<a href='".$link["url"]."'></a>";
// 	}
// }

// sites($a);

// print_r ($a);

// function phone_number($phone) {
// 	$pieces = explode(" ", $phone);
// 	$country_numbers = [
// 	'Latvia' => '+371',
// 	'Lithuania' => '+370',
// 	'Estonia' => '+372',
// 	'Rasha' => '+7',
// 	'America FIRST!!!' => '+1'
// 	];
// 	if ($key = array_search($pieces[0], $country_numbers)) {
// 		echo "It is a number in ". $key ." <br/>";
// 	} else {
// 		echo "It is unknown number <br/>";
// 	}
// 	$pieces[0] = "86";
// 	$new_phone = implode(" ", $pieces);
// 	return $new_phone;
// }

// echo phone_number("+7 633 32564");


// echo date("z", mktime(0, 0, 0, 9, 1, 2017)) + 1 . "<br/>";
// echo date("z") + 1 . "<br/>";

// echo (date("z", mktime(0, 0, 0, 9, 1, 2017)) + 1) - (date("z") + 1);

$a = [1,2,2,null,5,6,6];

if (array_search(null, $a)) {
	echo "blank element exists";
} else {
	echo "blank element does not exist";
}