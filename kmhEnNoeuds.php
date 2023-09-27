<?php
	define( "CONV_ND_KMH" , 1.852 ) ;
	
	echo "Saisir la vitesse en noeuds : " ;
	
	$vitesseNoeuds = fgets ( STDIN ) ;
	
	$vitesseKm = CONV_ND_KMH * $vitesseNoeuds ; 
	
	echo "Résultat de la conversion : " , $vitesseKm , "km/h\n" ;
	
