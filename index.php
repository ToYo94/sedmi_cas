<?php

interface specifikacije
{
	public function podesiCenu();
}

class proizvod implements specifikacije
{
	public function podesiCenu()
	{
		echo "Cena je podesena";
	}
}

$proizvod = new proizvod();
$proizvod->podesiCenu();

?>