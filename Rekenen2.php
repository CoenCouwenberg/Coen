<html>
	<head>
	
<?php
$max = 3;
$firstnumber = mt_rand(0, $max);
$secondnumber = rand(0, ($max - $firstnumber));
$result = $firstnumber + $secondnumber;
echo $firstnumber.' + '.$secondnumber.' = '.$result;
?>
	<form id="formulier" action="" method="POST">
			<input type="double" size="30" maxlength="3" name="antwoord">
			<br/><br/>
			<input type="submit" value="berekenen" size="35" name="controle">
	</form>
<?php
if (isset($_POST['controle']))
{
	$antwoord = $_POST['antwoord'];
	echo $antwoord. "<br />". $result;
	if ($result==$antwoord)
		{
			echo "Goed Gedaan";
		}
		else
		{
			echo "Fout";
		}
}
?>