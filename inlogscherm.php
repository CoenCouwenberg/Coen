<html>
	<head>
		<title>zye</title>
	</head>
	<body>
	    <pre>
	<?php
		
	?>
	</pre>
			<h2>Inloggen</h2>
			<?php echo $probleem;?>
		<form action="kloptwachtwoord.php" method="get">
			<table>
				<tr>
					<td>Gebruikersnaam : </td>
					<td><input type="text" name="gebruikersnaam" ></td>
				</tr>
				<tr><br />
					<td>Wachtwoord : </td>
					<td><input type="password" name="wachtwoord" ></td>
				</tr>
			</table>	
					<br />
				<input type="submit" name="inloggen" >
		</form>
	</body>
</html>