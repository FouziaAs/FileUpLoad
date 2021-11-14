<?php
// Je vérifie si le formulaire est soumis comme d'habitude
if($_SERVER['REQUEST_METHOD'] === "POST"){ 
    
    $uploadDir = 'public/uploads/';
    
    $uploadFile = $uploadDir . basename($_FILES['avatar']['name']);
   
    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    
    $extensions_ok = ['jpg','png','webp'];
    
    $maxFileSize = 1000000;

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];

    
    // Je sécurise et effectue mes tests

    if( (!in_array($extension, $extensions_ok ))){
        $errors[] = 'Veuillez sélectionner une image de type Jpg ou Png ou webp!';
    }

    /****** On vérifie si l'image existe et si le poids est autorisé en octets *************/
    if( file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize)
    {
    $errors[] = "Votre fichier doit faire moins de 1M !";
    }
}
    ?>


