<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assigment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
	<?php
	$name = "Mohim Molla";
	$age = 26;
	$country = "Bangladesh";
	$qualification = "Honours";
	$blod = "B+";
	$height = "5 feet 7 inches";
	?>

	<div class="container">
		<?php include 'navbar.php' ?>
		<h3 class="text-center">My Personal Information</h3>
		<table class="table table-success table-striped-columns text-center" style="width:50%; margin:0 auto;">
			<tr>
				<th class="" colspan="2">Personal Information</th>
			</tr>
			<tr>
				<td>Name</td>
				<td><?= $name ?> </td>
			</tr>
			<tr>
				<td>Age</td>
				<td><?= $age ?> </td>
			</tr>
			<tr>
				<td>Country</td>
				<td><?= $country ?> </td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><?= $qualification ?> </td>
			</tr>
			<tr>
				<td>Blod Group</td>
				<td><?= $blod ?> </td>
			</tr>
			<tr>
				<td>Blod Group</td>
				<td><?= $blod ?> </td>
			</tr>
			<tr>
				<td>Height</td>
				<td><?= $height ?> </td>
			</tr>
		</table>
		<div class="text-center mt-4">
			<a class="btn btn-primary" href="index.php">Go to Home</a>
		</div>

	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>