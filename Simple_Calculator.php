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
		<h3 class="text-center">Simple Calculator</h3>
		<div id="form">

			<?php

			// Check if the form is submitted
			if (isset($_POST['calculate'])) {
				// Get user inputs
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$operation = $_POST['operation'];

				// Initialize the result variable
				$result = 0;

				// Perform the selected operation using if-else conditions
				if ($operation == "add") {
					$result = $num1 + $num2;
					$operationSymbol = "+";
				} elseif ($operation == "subtract") {
					$result = $num1 - $num2;
					$operationSymbol = "-";
				} elseif ($operation == "multiply") {
					$result = $num1 * $num2;
					$operationSymbol = "*";
				} elseif ($operation == "divide") {
					if ($num2 != 0) {
						$result = $num1 / $num2;
						$operationSymbol = "/";
					} else {
						$result = "Cannot divide by zero";
					}
				} else {
					$result = "Invalid operation";
					$operationSymbol = "";
				}

				// Display the result
				echo "<p>Result: $num1 $operationSymbol $num2 = $result</p>";
			}
			?>


			<form method="post" action="">
				<label for="num1">Enter first number:</label>
				<input type="text" name="num1" required><br>
				<label for="num2">Enter second number:</label>
				<input type="text" name="num2" required><br>
				<label for="operation">Select operation:</label>
				<select name="operation" required>
					<option value="add">Addition (+)</option>
					<option value="subtract">Subtraction (-)</option>
					<option value="multiply">Multiplication (*)</option>
					<option value="divide">Division (/)</option>
				</select><br>

				<input type="submit" name="calculate" value="Calculate">
			</form>

		</div>


		<div class="text-center mt-4">
			<a class="btn btn-primary" href="index.php">Go to Home</a>
		</div>



	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>