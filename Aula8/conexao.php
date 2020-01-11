<?php
    
	$server = "localhost";
    $user = "root"; 
    $sen = ""; 
    $bd = "bdaula8";

    $con = mysqli_connect($server,$user,$sen,$bd);
	
	if(!$con){
		echo " Não conectou ao BD";
	}



?>