<?php
	$xdim = $_POST["xdim"];
	$ydim = $_POST["ydim"];
	$playercount = 0;
	$player1 = null;
	$player2 = null;
	$player3 = null;
	$player4 = null;
	$player1score = 0;
	$player2score = 0;
	$player3score = 0;
	$player4score = 0;
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="labstyle.css">
	</head>
	<body>
		<table id="scorebar">
			<tr>
				<?php
					if ($_POST["player1"]) {
						$player1 = $_POST["player1"];
						$playercount++;
						echo "<td><p>" . $player1 . ": $player1score </p></td>";
					}
					if ($_POST["player2"]) {
						$player2 = $_POST["player2"];
						$playercount++;
						echo "<td><p>" . $player2 . ": $player2score </p></td>";
					}
					if ($_POST["player3"]) {
						$player3 = $_POST["player3"];
						$playercount++;
						echo "<td><p>" . $player3 . ": $player3score </p></td>";
					}
					if ($_POST["player4"]) {
						$player4 = $_POST["player4"];
						$playercount++;
						echo "<td><p>" . $player4 . ": $player4score </p></td>";
					}
				?>
			</tr>
		</table>
	</body>
</html>