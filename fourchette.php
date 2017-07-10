<?php 


function jeu () { 
	$fourchette = rand(1,100);									// chiffres aleatoire
	$nbrsaisie=0;

	do {														//debut de la boucle
		echo "essaye de trouver un chiffre entre 1 et 100 : ";

		$saisie = fgets(STDIN); 					  //saisie dun chiffre par joueur
				
		if ($saisie < $fourchette) { 
			
			echo "nombre donné trop petit \n";
		} 
		elseif ($saisie > $fourchette) {
			
			echo "nombre donné trop grand \n";
		}
		$nbrsaisie++; 

	} while ( $saisie != $fourchette and $nbrsaisie<8); 	 	// fin de la boucle
		
	if ($saisie == $fourchette) {							// condition de sortie...
		echo "bravo tu es trop fort";
	}
	else echo "tu as épuisé toutes tes chances";  				 // ...de la boucle
}

jeu();														// appel la fonction jeu