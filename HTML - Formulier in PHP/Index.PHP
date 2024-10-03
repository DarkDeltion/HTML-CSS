<?php
  $nummer1 = 0;
  $nummer2 = 0;
  $result = null;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nummer1 = $_POST["value1"];
    $nummer2 = $_POST["value2"];
    $result = $nummer1 * $nummer2;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		#result {
			display: block;
			background-color: silver;
			width:			  15%;
			height:			  100px;
		}
    </style>
</head>
<body>
	<h1>Tafels berkenen</h1>
	<form action="" method="post">
		<label>getal nummer 1:</label>
		<input type="number" name="value1" placeholder="getal invoeren">

		<p>X</p>

		<label>getal nummer 2:</label>
		<input type="number" name="value2" placeholder="getal invoeren">
		
		<input type="submit" value="Doe iets"><br>

		<br>
		<div id="result">
			<?php echo $result; ?>
		</div>
	</form>
</body>
</html>