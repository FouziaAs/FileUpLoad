<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$firstname = 'Tom';
$lastname = 'Hanks';
$age = 23;
?>
<?php 
    if (!empty($_FILES)){
        echo "<p><img src='public/uploads/" . basename($_FILES['avatar']['name']) . "'></p>";
        echo "<h1>Prénom : $firstname<br>Nom : $lastname<br>Age : $age ans  <br></h1>";
    }
?>


<form method="post" enctype="multipart/form-data" id="formulaire">
    <label for="firstname">Prénom :</label><br>
    <input type="text" id="firstname" name="firstname" required><br>
    <label for="lastname">Nom :</label><br>
    <input type="text" id="lastname" name="lastname" required><br>
    <label for="age">Age :</label><br>
    <input type="number" id="age" name="age" required><br>
    <label for="imageUpload">Upload an profile image</label>    
    <input type="file" name="avatar" id="imageUpload" />
    <button name="send" onclick="cacherFormulaire();">Send</button>
</form>

</body>
</html>