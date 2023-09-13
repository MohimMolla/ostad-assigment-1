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
		<h1 class="text-center">Grade Calculator</h1>
		<div id="form">
			<form method="post">
				<label for="test1">Test 1 Score:</label>
				<input type="number" name="test1" id="test1" required>
				<br>
				<label for="test2">Test 2 Score:</label>
				<input type="number" name="test2" id="test2" required>
				<br>
				<label for="test3">Test 3 Score:</label>
				<input type="number" name="test3" id="test3" required>
				<br>
				<input class="mt-2" type="submit" name="calculate" value="Calculate">
			</form>

			<?php

			if (isset($_POST['calculate'])) {
				$test1 = $_POST['test1'];
				$test2 = $_POST['test2'];
				$test3 = $_POST['test3'];
				// Calculate the average
				$average = ($test1 + $test2 + $test3) / 3;
				// Determine the letter grade
				
				if($average >= 80){
					$grade = 'A+';
				}
				elseif($average >= 70){
					$grade = 'A';
				}
				elseif($average >= 60){
					$grade = 'A-';
				}
				elseif($average >= 50){
					$grade = 'B';
				}
				elseif($average >= 40){
					$grade = 'C';
				}
				elseif($average >= 30){
					$grade = 'd';
				}
				else{
					$grade =  "You are fail";
				}
				echo "<p>Average Score: $average</p>";
				echo "<p>Letter Grade: $grade</p>";
			}
			

				
				
			
			?>
		</div>
		<div class="text-center mt-4">
			<a class="btn btn-primary" href="index.php">Go to Home</a>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>