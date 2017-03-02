<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titre; ?></title>
</head>
<body>
	<form action="<?php echo site_url('services/create') ?>" method="post">
		<table align="center" width="300">
			<tr>
				<td><label for="nom">Nom: </label></td>
				<td><input type="text" name="nom"></td>
			</tr>
			<tr>
				<td><label for="prix">Prix: </label></td>
				<td><input type="text" name="prix"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Valider"  ></td>
			</tr>
		</table>
	</form>
</body>
</html>