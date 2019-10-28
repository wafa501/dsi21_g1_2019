<?php
    include 'dbconnexion.php' ;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $nb = $cnx_bd->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$firstname', '$lastname', '$email','$phone')");
      echo "ajout avec sucées !!" ; 
?>