<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assigment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<style>
		/*body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }*/

		h1 {
			color: #333;
		}

		/*.container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }*/
		#form {
			width: 50%;
			margin: 0 auto;
			border: 1px solid black;
			padding: 10px;
			box-shadow: #0056b3;
			background-color: aqua;
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"],
		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		select {
			appearance: none;
		}

		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 4px;
			padding: 10px 20px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #0056b3;
		}

		p.result {
			font-weight: bold;
			color: #333;
			margin-top: 15px;
		}
	</style>
</head>

<body>


	<div class="container">
		<?php include 'navbar.php' ?>
		<h3 class="text-center">Even-Odd Checker</h3>
		<div id="form">
			<?php
			if (isset($_POST['check'])) {
				$number = $_POST['number'];
				$message = ($number % 2 == 0) ? "The number $number is even." : "The number $number is odd.";
				echo "<h1>$message</h1>";
			}
			?>


			<form method="post" action="">
				<label for="number">Enter a Number:</label>
				<input type="text" name="number" required>
				<input type="submit" name="check" value="Check">
			</form>

		</div>


		<div class="text-center mt-4">
			<a class="btn btn-primary" href="index.php">Go to Home</a>
		</div>



	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>