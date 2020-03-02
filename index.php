<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jose's Website </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
	$dayofweek = date("w");
	echo $dayofweek;
	switch ($dayofweek) {
		case 1:
		echo " It is Monday March 2nd!";
		break;

		case 2:
		echo "It is Tuesdsay March 3rd!";
		break;

		case 3:
		echo "It is Wednesday March 4th!";
		break;

		case 4:
		echo "It is Thursday March 5th!"
		break;

		case 5:
		echo "It is Friday March 6th!"
		break;

		case 6:
		echo "It is Saturday March 7th!"
		break;

		case 0:
		echo "It is Sunday March 8th!"
		break;

	?>

</body>

</html>