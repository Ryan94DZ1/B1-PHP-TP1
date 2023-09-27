<?php
	
	
	echo "Saisir la température en °C : " ;
	
	$temperatureCelsius = fgets( STDIN ) ;
	
	$temperatureFahrenheit = 1.8 * $temperatureCelsius + 32 ;
	
	echo "Saisir la température en °F : " ,  $temperatureFahrenheit , "°C/°F\n" ;
