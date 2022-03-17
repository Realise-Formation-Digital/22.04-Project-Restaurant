<!DOCTYPE html>
<html>
<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
</head>
<body>
<p>Dans le formulaire précédent, vous avez fourni les
    informations suivantes :</p>

<?php
echo 'Nom : '.$_POST["name"].'<br>';
echo 'Email : ' .$_POST["email"].'<br>';
?>
</body>
</html>
