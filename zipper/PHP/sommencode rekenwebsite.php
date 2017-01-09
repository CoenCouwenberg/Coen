<?php
session_start();

if(isset($_SESSION['vraagnr']))
{
	$Vraagnr=($_SESSION['vraagnr']);
	$somnew=($_SESSION['somnew']);
}
else
{
	$vraagnr=1;
	$somnew=array();
}

if($vraagnr <=10)
{
$getal1 = mt_rand(0,234);
$getal2 = mt_rand(0,234);
$uitkomst=$getal1+$getal2;

$som=array($getal1,$getal2,$uitkomst);

array_push($sommenw,$som);
$vraagnr++;
$_SESSION['vraagnr']=$vraagnr;
$_SESSION['somnew']=$somnew;

echo $getal1 . ' + '. $getal2 . ' = ' .$uitkomst.'</br>';
$uitkomst=$getal1+$getal;

echo '</br>De uitkomst moet zijn: '. $uitkomst.'</br>';
}
else
{
echo 'uw score is';
}












