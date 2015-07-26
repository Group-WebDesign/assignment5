<!DOCTYPE HTML>
<html> 
	<body>
		
		<?php
		echo "Enter integer values for min-multiplicand, max-multiplicand, min-multiplier, max-multiplier in the URL.";
		if (!empty($_GET)) {
			$maxmult = $_GET["max-multiplier"];
		}
		if (!empty($_GET)) {
			$minmult = $_GET["min-multiplier"];
		}
		if (!empty($_GET)) {
			$maxcand = $_GET["max-multiplicand"];
		}
		if (!empty($_GET)) {
			$mincand = $_GET["min-multiplicand"];
		}

			function errorCheck($maxmult1, $minmult1, $maxcand1, $mincand1){
				if(is_int($maxmult1) == true | is_int($minmult1) == true | is_int($maxcand1) == true | is_int($mincand1) == true){
					echo "**only integers are accepted** \n";
					return;
				}
				if($maxmult1 < $minmult1){
					echo "**minimum multipliplier is larger than maximum multiplicand** \n";
					return;
				}
				if($maxmult1 == $minmult1){
					echo "**minimum multiplicand is equal to maximum multiplicand** \n";
					return;
				}
				if($maxcand1 < $mincand1){
					echo "**minimum multiplicand is larger than maximum multiplier** \n";
					return;
				}
				if($maxmult1 == null){
					echo "**missing parameter: maximum multiplier** \n";
					return;
				}
				if($maxcand1 == $mincand1){
					echo "**minimum multiplicand is equal to maximum multiplier** \n";
					return;
				}
				if($minmult1 == null){
					echo "**missing parameter: minimum multiplier** \n";
					return;
				}
				if($maxcand1 == null){
					echo "**missing parameter: maximum multiplicand** \n";
					return;
				}
				if($mincand1 == null){
					echo "**missing parameter: minimum multiplicand** \n";
					return;
				}else{
					multTable($maxmult1, $minmult1, $maxcand1, $mincand1);
				}
			}

			function multTable($maxmult1, $minmult1, $maxcand1, $mincand1){
				$counter1 = 0;
				$counter3 = 0;

				echo "<table>";
				for($i = 0; $i < ($maxcand1 - $mincand1 + 2);$i++) {
					$counter = 0;
					$counter2 = 0;
					echo "<tr>";
					for ($j = 0; $j < ($maxmult1 - $minmult1 + 2); $j++) {

						echo "<td>";
						if ($j == 0 & $i == 0) {
							echo "_";
						}
						if( $j != 0 & $i == 0) {
							echo $minmult1 + $counter;
							$counter++;
						}
						if($j != 0 & $i != 0){
							echo ($minmult1 + $counter2) * ($mincand1 - 1 + $counter3 );
							$counter2++;

						}
						if ($j == 0 & $i != 0){
							echo $mincand1 + $counter1;
							$counter1++;
						}


						echo "</td>";
					}
					$counter3++;
					echo "</tr>";
				}
				echo "</table>";

			}
			errorCheck($maxmult, $minmult, $maxcand, $mincand);
		?>
		
	</body>
</html>
