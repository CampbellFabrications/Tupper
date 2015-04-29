<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tupper's Self Referential Formula</title>
	<link type="text/css" href="Website.css" rel="stylesheet"></link>
</head>
<body>
	<header>
		<h1>Tupper's Self Referential Formula K value creator</h1>
	</header>
	<?php
	
	echo '<form method="post" action="' .  htmlspecialchars($_SERVER["PHP_SELF"]) . '" id="form1">';
	//display box
	

	$a = 1; // row counter
	$b = 1803; // top left cell with respect to k value encoding
	$c = 1803; // top left cell static
	$d = 0; //row iterative counter multiplied and added to $b
	echo "<table border='1'>";
	echo "<tr>";
	//lists the cell headers DONE
	for($jndex = 0; $jndex < 107; $jndex++) 
	{
		echo "<th>" . $a . "</th>";
		$a++;
	}
	echo "</tr>";
	//lists the cell headers DONE


	for($kndex = 0; $kndex < 17; $kndex++)
	{
		echo "<tr>";
		for($index = 0; $index < 107; $index++)
		{
			echo "<td><input type='checkbox' name='" . $b . "'/></td>";
			$b -= 17;
		}
		$b = $c + $kndex;
		echo "</tr>";
	}

echo "</table>";
echo "</form>";
?>
</body>
</html>
