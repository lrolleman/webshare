<?php
	$xdim = $_POST["xdim"];
	$ydim = $_POST["ydim"];
	
	$players = array();
	$playerscores = array(0, 0, 0, 0);
	for ($i=1; $i<=4; $i++) {
		if ($_POST["player" . $i]) {
			$players[$i-1] = $_POST["player" . $i];
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="labstyle.css">
	</head>
	<body>
		<table id="scorebar">
			<tr>
				<?php
					for ($i=0; $i<count($players); $i++) {
						echo "<td><p>" . $players[$i] . ": " . $playerscores[$i] . "</p></td>";
					}
				?>
			</tr>
		</table>
	</body>
</html>