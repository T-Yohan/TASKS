<?php
include('config.php') ;

include($dir_common."db.php") ;

//var_dump($_GET) ;
//var_dump($_POST) ;

switch ($_GET['mod']) { //gestion du mod d'arrivé en GET

  case 'nouvelle tache!'://ajouter une tache en base

    $sql= "INSERT INTO tasks (task , status) VALUES ('".$_POST['task']."','n')" ;//creation de la requete d'ajout

      $mysqli->query($sql) ;//executer la requete d'ajout
    
    break;

    case 'del'://effacer une tache en base 

    $sql= 'DELETE FROM tasks WHERE id='.$_GET['id'] ; //creation de la requete de suppression 

      $mysqli->query($sql) ; //executer la requete de suppression

    case 'upd'://modifier une tache en base

      $sql= "UPDATE tasks SET etat='o' id=".$_GET['id'] ; //creation de la requete de mise à jour
//met à jour la colonne etat de la table tache quand l'identifiant = id

    break;

  default:
    
    break;
}
header("Location: index.php") ;


?>