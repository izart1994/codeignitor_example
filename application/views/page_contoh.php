<!DOCTYPE html>
<html>
	<head>
		<title>Testing</title>
	</head>
	<body>
		<h1>INI ADALAH PAGE CONTOH</h1>
		<hr><hr>
		<p>Belajar CodeIgniter</p>

		<table border="1px solid black">
			<thead>
				<tr>
					<td>Nama</td>
					<td>Negara</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pljr as $pelajar) : ?>
				<tr>
					<td><?php echo $pelajar['person_name'];?></td>
					<td><?php echo $pelajar['person_address'];?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</body>
</html>
