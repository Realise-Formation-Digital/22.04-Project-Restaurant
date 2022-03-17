<?php
include 'main.php'
?>

<!--Formulaire-->
<form class="row d-flex justify-content-center gx-0" action="index.php" method="post">

<div class="reserv col-12 col-md-5 me-4 pb-3 form-group">

    <label for="name">
        Nom complet
    </label>

    <input type="text" class="form-control" placeholder="Votre prénom et votre nom" id=name name="name">

</div>

<div class="col-12 col-md-5 pb-3 form-group">

    <label for="email">
        E-mail
    </label>

    <input type="text" class="form-control" placeholder="Votre adresse électronique" id=email name="email">

</div>

<div class="form-group">
    <label for="comment">Commentaire:</label>
    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>

<div class="row d -flex justify-content-center pt-5">
    <!--                        <button id="btn-reservation" class="btn btn-transparent col-6 fs-5 mb-5 text-white">Envoyer</button>-->
    <input id="btn-reservation" class="btn btn-transparent col-6 fs-5 mb-5 text-white" id="submit" type="submit" value="Envoyer">
</div>

</form>
