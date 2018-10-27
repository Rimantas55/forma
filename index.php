<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>

	<?php
// // $count = 8979878784;
// echo isset($count);
// if (isset($_POST['nickname']) || }}) {
// 	echo $_POST['nickname'];
// } else {
// 	echo "Nickname is not set. Please enter below";
// }
	if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])) {
		switch ($_GET['operation']) {
			case "sum":
				if (is_numeric($_GET['a']) && !empty($_GET['a'])) {
					echo $_GET['a'] + $_GET['b'];
				} else {
					echo $_GET['a'] . $_GET['b'];
				}
				
			break;
			case "diff":
				echo $_GET['a'] - $_GET['b'];
			break;
			case "mult":
				echo $_GET['a'] * $_GET['b'];
			break;
		
			case "divide":
				echo $_GET['a'] / $_GET['b'];
			break;
			case "concat":
				echo $_GET['a'] . $_GET['b'];
			break;
			default:
			"Operation was not recognized.";
		}
		
	}
	?>

	<h1>PHP Calc</h1>
	<form action="index.php" method="get">
		<input type="text" name="a" required="true">
		<input type="text" name="b">

		<select name="operation">
			<option value="sum">Sum</option>
			<option value="diff">Difference</option>
			<option value="mult">Multiply</option>
			<option value="divide">Divide</option>
			<option value="concat">Concatinate</option>
		</select>

		<input type="submit" value="Submit">
	</form>

</body>
</html>