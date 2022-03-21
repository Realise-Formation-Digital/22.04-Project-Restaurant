<?php
include 'formulaire.php'
?>


<h1>Formulaire HTML</h1>

<form action="formulaire-giraud.php" method="post">
    <div class="c100">
        <label for="name">First name : </label>
        <input type="text" id="nom" name="name">
    </div>
    <div class="c100">
        <label for="email">Email : </label>
        <input type="email" id="e-mail" name="email">
    </div>
    
    <div class="c100" id="submit">
        <input type="submit" value="Envoyer">
    </div>
</form>