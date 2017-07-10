

<?php 
$nbrs = nbrs (1,100); // plage de chiffres
function nbrs ($nbrpaire,$nbrimpaire) { // fonction qui colorie les nombres

	while ($i < $nbrimpaire) { 
		
		$i++;
		
		if (fmod(sqrt($i), 1) ==0){

			echo "<strong>";
		}

		if ($i % 2 == 0){
			echo "<font color='orange'>$i</font></br>"; }
		elseif ($i % 2 > 0) {
			echo "<font color='blue'>$i</font></br>";
		}

		if (fmod(sqrt($i), 1) ==0) echo "</strong>"."\n"; 

	}
}

