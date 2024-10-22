<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
$array=array('carro01'=>'110000','Carroa02'=>'670000','carro03'=>'700000','carro04'=>'100000',
		'carroa05'=>'80000');

arsort($array);
foreach ($array as $carros => $precios) {
		echo" El precio de los carros son $carros:$precios";
		echo "<br>";
	}
	$array += [ "carro06" => 2000, "carro07" => 7000 ];
	echo "<p>";

    
  arsort($array);  
foreach ($array as $carros=> $precios);{
echo"El precio de los carros son$carros:$precios";
echo "<br>";
}
	?>

</body>
</html>