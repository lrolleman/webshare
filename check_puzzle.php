<html>
	<body>
<?php
if (isset($_POST['submit'])) {
	session_start();
	$lexpr = $_POST['val1'] . $_POST['op1'] . $_POST['val2'] . $_POST['op2'] . $_POST['val3'] . $_POST['op3'] . $_POST['val4'] . $_POST['op4'] . $_POST['val5'];
	$rexpr = $_POST['val6'] . $_POST['op5'] . $_POST['val7'] . $_POST['op6'] . $_POST['val8'] . $_POST['op7'] . $_POST['val9'] . $_POST['op8'] . $_POST['val10'];
	$lanswer = eval("return $lexpr;");
	$ranswer = eval("return $rexpr;");
	echo $lexpr . " = " . $lanswer . "<br>";
	echo $rexpr . " = " . $ranswer . "<br>";
	if ($lanswer == $ranswer)
		echo "that is correct";
	else
		echo "that is incorrect <br>A correct solution is " . $_SESSION['lsolution'] . " = " . $_SESSION['rsolution'] . " = " . eval("return " . $_SESSION['lsolution'] . ";");
	session_destroy();
}
?>	
	<br>
	<a href="index.php">Try Again</a>
	</body>
</html>