<?php
    try {  
        include 'dbconnexion.php';   
    } catch(Exception $e) {    
        die('Erreur : '.$e->getMessage());   
    }
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone']; 
        $modif = $cnx->exec("UPDATE students SET firstname='$firstname',lastname='$lastname',email='$email',phone='$phone' "); 
    echo $modif . ' entrées ont été modifiées !';  
?>