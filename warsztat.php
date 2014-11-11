<?php

include_once('samochod.php');

//$samochod = new Samochod();
//echo $samochod->helloSamochod();

function otoSamochod(Samochod $s)
{
	return "Witaj! To ja - Twój samochod: ".$s->getKolor()." ".$s->getMarka()." ".$s->getModel()."\n";
}

$mojSamochod = new Samochod("VW", "GOLF", "czarny", "hatchback");
echo $mojSamochod->helloSamochod();

$innySamochod = new Samochod("Honda", "Civic", "srebrna", "hatchback");
echo $innySamochod->helloSamochod();

echo $innySamochod->getKolor()."\n";
$innySamochod->setKolor("zielone auta nie sa fajne nanananan");
echo $innySamochod->getKolor()."\n";
echo $innySamochod->helloSamochod();

echo otoSamochod($innySamochod);
echo otoSamochod($mojSamochod);
?>
