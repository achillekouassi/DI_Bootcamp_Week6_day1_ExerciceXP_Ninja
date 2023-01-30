<?php
  
   if ( isset( $_GET['submit'] ) ) {

     $nom = $_GET['nom']; 
     $couleur = $_GET['couleur']; 
    echo 'Nom : ' . $nom . '<br>'. ' couleur : ' . $couleur; 
     exit;
  }
?>