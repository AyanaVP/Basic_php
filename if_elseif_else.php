<!DOCTYPE html>
<html>
<head>
	<title>if_elseif_else</title>
</head>
<body>

	<?php

	$mark = 28;

	if($mark>=90)
	{
		echo "You are excellent";
	}
	elseif($mark>=80)
	{
		echo "Verygood";
	}
	elseif($mark>=60)
	{
		echo "Good";
	}
	else 
	{
		echo "Need Improvement";
	}

	?>

</body>
</html>