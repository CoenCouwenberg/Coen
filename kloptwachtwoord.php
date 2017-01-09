<?php
session_start();
$inputwachtwoord = $_GET["wachtwoord"];
$inputgebruikersnaam = $_GET["gebruikersnaam"];
$wachtwoord = "niettedoen";
$gebruikersnaam = "luktjeniet";
if($inputwachtwoord == $wachtwoord && $inputgebruikersnaam == $gebruikersnaam)
{
	$_SESSION['loggedin'] = true;
	$_SESSION['naam'] = "bono";
	$url =("location: welkom.php");
	header($url);
}
if($inputwachtwoord == $wachtwoord && $inputgebruikersnaam != $gebruikersnaam)
{
	$probleem = "foutegebruiker";
	session_destroy(loggedin);
}
if($inputwachtwoord != $wachtwoord && $inputgebruikersnaam == $gebruikersnaam)
{
	$probleem = "foutwachtwoord";
	session_destroy(loggedin);
}
$url = ("location: inlogscherm.php?niet_de_goede_gegevens");
header($url);
exit;
}
?>