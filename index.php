<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<label for="x">x: </label>
			<input name="x" type="text">
			<label for="y">y: </label>
			<input name="y" type="text">
			<label for="z">z: </label>
			<input name="z" type="text">
			<input type="submit" value="total">
		</form>
	</body>
</html>
<?php 
	$x = $_POST["x"];
	$y= $_POST["y"];
	$z = $_POST["z"];
	$total = null;

	// $total = abs($x);
	// $total = round($x);
	// $total = floor($x);
	// $total = ceil($x);
	// $total = sqrt($x);
	// $total = pow($x, $y);
	// $total = max($x, $y, $z);
	// $total = min($x, $y, $z);
	// $total = pi();
	// $total = rand(1, 6);
	echo $total;
?>