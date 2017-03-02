<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>test index</h1>
<?php if (isset($message)): ?>
	<h2><?=$message; ?></h2>
<?php endif ?>
<hr>
<?php 
var_dump($services);
 ?>

 <table align="center" border="1" width="90%">
 	<tr>
 		<td>id</td>
 		<td>nom</td>
 		<td>prix</td>
 		<td>opérations</td>
 	</tr>
 	<?php foreach ($services as  $s): ?>
 	<tr>
 		<td><?=$s->id ?></td>
 		<td><?=$s->nom ?></td>
 		<td><?=$s->prix ?></td>
 		<td><a href="<?php echo site_url('services/show/'.$s->id);  ?>">consulter</a></td>
 	</tr>
 	
 	<?php endforeach ?>
 	</table>
</body>
</html>