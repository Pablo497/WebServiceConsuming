<?php 

$data = json_decode( file_get_contents("http://universities.hipolabs.com/search?country=Colombia"), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebService Rest Universidades</title>
</head>
<body>

	<table border="1" style="text-align: left;">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Sitio web</th>
		</tr>
		<?php 
			for ($i=0; $i < count($data); $i++) { 
		?>
		<tr>
			<td><?php echo $i . ". "; ?></td>

			<?php foreach ($data[$i]["web_pages"] as $webpage) { ?>

			<td> <?php echo $webpage; ?> </td>
			<?php } ?>

			<td> <?php echo $data[$i]["name"];?> </td>
		</tr>
		<?php }	 ?>
	</table>
</body>
</html>

