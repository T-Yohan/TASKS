<?php

$mysqli = @new mysqli( $dbhost , $dbuser , $dbPw , $dbname ) ;

if($mysqli->connect_error){

  echo "Erreur" ;

  exit() ;

}

?>