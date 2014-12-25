<html>
	<head>
		<link rel="stylesheet" type="text/css" href="puzzlestyle.css">
	</head>
	<body>
		<p>Little Christmas Puzzle</p>
		<form name="equation" action="check_puzzle.php" method="POST">
			<?php
				$min = 1;
				$max = 10;
				$val1 = rand($min, $max);
				echo $val1;
			?>
			<input type="hidden" name="val1" value=<?php echo $val1; ?>>
			<select name="op1">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				$val2 = rand($min, $max);
				echo $val2;
			?>
			<input type="hidden" name="val2" value=<?php echo $val2; ?>>
			<select name="op2">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				$val3 = rand($min, $max);
				echo $val3;
			?>
			<input type="hidden" name="val3" value=<?php echo $val3; ?>>
			<select name="op3">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				$val4 = rand($min, $max);
				echo $val4;
			?>
			<input type="hidden" name="val4" value=<?php echo $val4; ?>>
			<select name="op4">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				$val5 = rand($min, $max);
				echo $val5;
			?>
			<input type="hidden" name="val5" value=<?php echo $val5; ?>>
			=
			
			<?php
				$ops = array("+", "-", "*", "/");
				$lexpr = $val1 . $ops[rand(0, 3)] . $val2 . $ops[rand(0, 3)] . $val3 . $ops[rand(0, 3)] . $val4 . $ops[rand(0, 3)] . $val5;
				session_start();
				$_SESSION['lsolution'] = $lexpr;
				$answer = eval("return " . $lexpr . ";");
				if (!is_int($answer)) 
					header("location:index.php");
				//echo $answer;
				$val6 = 0;
				$val7 = 0;
				$val8 = 0;
				$val9 = 0;
				$val10 = 0;
				$rexpr = "n";
				$count = 0;
				do {
					$val6 = rand($min, $max);
					$val7 = rand($min, $max);
					$val8 = rand($min, $max);
					$val9 = rand($min, $max);
					$val10 = rand($min, $max);
					$rexpr = $val6 . $ops[rand(0, 3)] . $val7 . $ops[rand(0, 3)] . $val8 . $ops[rand(0, 3)] . $val9 . $ops[rand(0, 3)] . $val10;
					$ranswer = eval("return " . $rexpr . ";");
					$count = $count + 1;
					if ($count >= 500)
						header("location:index.php");
				} while (!is_int($ranswer) || $ranswer != $answer);
				$_SESSION['rsolution'] = $rexpr;
			?>
			<?php
				echo $val6;
			?>
			<input type="hidden" name="val6" value=<?php echo $val6; ?>>
			<select name="op5">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				echo $val7;
			?>
			<input type="hidden" name="val7" value=<?php echo $val7; ?>>
			<select name="op6">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				echo $val8;
			?>
			<input type="hidden" name="val8" value=<?php echo $val8; ?>>
			<select name="op7">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				echo $val9;
			?>
			<input type="hidden" name="val9" value=<?php echo $val9; ?>>
			<select name="op8">
				<option value=" "> </option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<?php
				echo $val10;
			?>
			<input type="hidden" name="val10" value=<?php echo $val10; ?>>
			<br>
			
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>