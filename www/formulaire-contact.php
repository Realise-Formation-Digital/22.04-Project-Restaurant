
<?php
// On pose les conditions pour vérifier si les champs sont remplis
if(isset($_POST['mailform'])) {
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $message='';
      $msg="Votre message a bien été envoyé.";
// Si un ou des champs sont manquants alors un avertissement est affiché
   } else {
        $msg="Tous les champs doivent être complétés!";
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-success p-2">
<h2 class="d-flex justify-content-center">Formulaire de contact</h2>
<br>
<form class="row d-flex justify-content-center gx-0" method="POST" action="formulaire.php" method="post">
    <div class="reserv col-12 col-md-5 me-4 pb-3 form-group">
    <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
    <input type="email" name="mail" placeholder="Votre e-mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
    <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
    <input type="submit" value="Envoyer !" name="mailform"/>
    </div>
</form>
<?php if(isset($msg)) {
    echo $msg;
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>