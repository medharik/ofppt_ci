<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h3>les informations de : <?php echo $service->nom; ?></h3>
<ul>
	<li>Nom: <?php echo $service->nom; ?></li>
	<li>Prix : <?= $service->prix; ?> dhs</li>
</ul>
</body>
</html>