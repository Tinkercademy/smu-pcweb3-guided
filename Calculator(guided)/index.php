<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			body{
				background-color: rgb(200, 50, 120);
			}

			h1{
				text-align: center;
				font-size: 50px;
			}

			h2{
				margin-top: 120px;
				margin-left: 150px;
			}

			#num1{
				margin-left: 120px;
			}

			#num2{
				margin-left: 20px;
			}

			#operator{
				margin-left: 200px;
				margin-right: 200px;
			}

			#calculate{
				margin-left: 480px;
			}

			h3{
				color: rgb(255, 0, 0);
				font-size: 60px;
				text-align: center;
			}
		</style>
	</head>
	<body>

		<?php
			$firstnum = $secondnum = $results = "";
			$error = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(empty($_POST["1stnum"])){
				$error = "Please enter a number in both fields";
			}else{
				$firstnum = $_POST["1stnum"];
			}

			if(empty($_POST["2ndnum"])){
				$error = "Please enter a number in both fields";
			}else{
				$secondnum = $_POST["2ndnum"];
			}

				if($_POST["op"] == "+"){
					$results = $firstnum + $secondnum;
				}elseif($_POST["op"] == "-"){
					$results = $firstnum - $secondnum;
				}elseif($_POST["op"] == "*"){
					$results = $firstnum * $secondnum;
				}else{
					$results = $firstnum / $secondnum;
				}
			}
		?>

		<h1> CALCULATOR </h1>

		<h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input id = "num1" type = "number" placeholder = "First Number" name = "1stnum" value = "<?php echo $firstnum; ?>">
				<select id = "operator" name= "op">
					<option value = "+"> + </option>;
					<option value = "-"> - </option>;
					<option value = "*"> * </option>;
					<option value = "/"> / </option>;
				</select>
				<input id = "num2" type = "number" placeholder = "Second Number" name="2ndnum" value = "<?php echo $secondnum; ?>">
				<br>
				<input type="submit" value="Calculate!" id = "calculate">
			</form>
			<?php echo $error ?>
		</h2>

		<?php 
		echo "<h3> $results </h3>";
		?>

		<h4>
			<a href="calculate.php">Another Page</a>
		</h4>


	<script type="text/javascript">
  		document.getElementById('operator').value = "<?php echo $_POST['op'];?>";
	</script>

	</body>
</html>