<?php

#globalne varijable

# var_dump($_SERVER);

echo $_SERVER["REQUEST_URI"];

if($_SERVER["REQUEST_URI"] == "/naprednikurs7/rute.php?ime=Mladen")
{
	echo "Pozdrav Mladene";
}

$imeSajta = "Moj sajtic";

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $imeSajta; ?></title>
</head>
<body>
	<?php 
	if($_SERVER["REQUEST_URI"] == "/naprednikurs7/rute.php?ime=Mladen") 
		{
	?>
		<h1>Dobrodosao</h1>
	<?php } ?>

	<?php echo $imeSajta; 

	#odemo na eklix.rs i po uzoru na glavu stranicu sledeci elementi trebaju biti vidljivi na nasoj stranici: logo, pretraga, prijava, lista i kategorija proizvoda, korpa, navigacija i footer

	?>
</body>
</html>