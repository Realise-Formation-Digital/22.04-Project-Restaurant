<?php
include = 'main.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Restaurant</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="jquery-3.5.1.min.js"></script>
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--CSS-->
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- Bootstrap/CSS--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body id="body" class="page-header">

    <!--Background image-->
    <section class="background1">

        <!--Navbar-->
        <nav class="navbar navbar-expand-xxl bg-transparent navbar-dark static-top pt-0">

            <div class="container-fluid">

                <img  class="navbar-brand brand" src="img/Lambda.png" alt="Lambda">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#resNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="resNavbar">

                    <ul  class="navbar-nav pe-3 navbarul">
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkhome">Home</a>
                        </li>
                        <!-- <input type="button" value="Scroll To Reservations"
                         onclick="document.getElementById('reservations').scrollIntoView()"/> -->
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkabout">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkingredients">Ingredients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkmenu">Menu</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkreviews">Reviews</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link text-white" id="linkreservations">Reservations</a>
                        </li>     
                    </ul>

                    <!-- social media-->
                    <div class="social">

                    <a href="#"><img src="img/twitter.png" alt="twitter"></a>

                    <a href="#"><img src="img/youtube.png" alt="youtube"></a>

                    <a href="#"><img src="img/facebook.png" alt="facebook"></a>

                    </div>

                </div>

            </div>

        </nav>

        <!--Container central -->
        <section  class="container sec2">

            <div class="card bg-transparent">

                <div class="card-body row d-flex justify-content-center">

                    <h1 id="h1" class="text-white text-center card-title mb-3 col-12 col-md-9 col-lg-7">the right ingredients for the right food</h1>

                    <div class="row d-flex justify-content-center">

                        <img class="w-25 mb-5 col-3" src="img/separations.png" alt="">

                    </div>

                    <div class="row d-flex justify-content-center">

                        <button id="button1" class=" btn btn-dark card-link me-4 col-4 col-md-2 rounded-0">BOOK A TABLE</button>




                        <button type="button" class="btn btn-dark card-link col-4 col-md-2 rounded-0 text-white " data-toggle="modal" data-target="#exampleModalLong">SEE THE MENU</button>                      






                    </div>
                </div>
            </div>
        </section>

    </section>

    <div id="about" id="poid-de-principal"class="row justify-content-center">

        <div id="nourriture-diago" class="col-4">

            <h3 id="nourriture"> just the right food</h3>

                <img id="about-grandeur" src="/images/design du titre about.png"/>

                <p class="text-center" id="Text-de-base">

                    If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees make us hard to resist! <br> Stop in today and check us out!

                </p>

                <img class="ps-5 pt-3" src="/images/signature .png"/>
            </div>

            <div id="boite-assiete" class="col-lg-4 col-lg-offset-4">

              <img class="img-fluid" src="/images/assiete-resto.png"/>

            </div>
        </div>
    </div>

    <!--background N0 contener fluid : image img-fluid-->
    <section id="image_background" class=" container-fluid bg-image img-fluid  d-flex align-items-center">

        <!--niveau N1 cardcont qui fait reference ?? un contener transparent-->
        <div class="card container bg-transparent border-0">
        <!--cela equivaut ?? 3 formes trangulaires -->
        <!--1er rectangle vide -->
        <!--2eme rectangle contenant 3 elements -->
        <!--niveau N2 img-card qui fait reference ?? du text blanc et centr??-->
            <div id="ingredients" id="img-card" class="card-body text-white row offset-6 col-6 text-center d-flex justify-content-center">

                <!--card-title est du text blanc et gras en h1-->
                <h1 class="card-title display-5 fw-bolder mt-5 pt-5">Fine ingredients</h1>
                <!--card IMG qui fait reference au separateur-->
                <img class="card-img img-fluid w-50 pb-4" src="/photos/ingredients_N3.png">
                <!--card TEXT avec p-->
                <p class="card-text fs-4 mb-5">
                If you've been to one of our restaurants, you've seen -and tasted- what keeps our customers coming back for
                more. Perfect materials and freshly baked food, delicious Lambda cakes,muffins,and gourmet coffees make us
                hard to resist! Stop in today and check us out!
                </p>
                <!--TEXT(N3)-->
                <div class="d-flex justify-content-center">
                    <div id="ingre" class="card-img img fluid mt-5 mb-5 d-none d-lg-inline">

                        <ul id="listingre" class="list-unstyled">
                            <li>
                                <i class="fa-solid fa-check"></i> Canary grass
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Whole Grain Stamp
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Dactyloctenium aegyptium
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Algal food ingredients
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Fermented bean paste
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Canary grass
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Whole Grain Stamp
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Dactyloctenium aegyptium 
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Algal food ingredients
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i> Fermented bean paste
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="1">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    

        <section id="menu" class="section-menu">
            <!-- ce div est le grand container -->
            <div class="menu1 row justify-content-center ">
                <!-- premi??re colonne ------------------------------------------------------------------------------------------------>
                <div id="appetisers-salad"class="col-lg-3 col-10">

                    <div id="appetisers" class="appetisers ">
                    
                        <div class="menu-title-container d-flex justify-content-center ">
                            <h3 class="gold-color">Appetisers</h3>
                        </div>
                        <div class="menu-title-container d-flex justify-content-center ">
                            <img  class="img-fluid"src="/images/dividerreussi.png" >
                        </div>
                        
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Tsatsiki</span>
                            <span id="Price1" class="item-al-price">$4.00
                                <input type="checkbox" id="checkbox_1" onclick="sommePrix()" name="Price" value="4.00">
                            </span>
                        </div>
                        <div class="item-al-description font-normal">Refreshing traditional cucumber and garlic yoghurt dip</div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Aubergine Salad</span>
                            <span id="Price2" class="item-al-price">$5.50
                                <input type="checkbox" id="checkbox_2" onclick="sommePrix()" name="Price" value="5.50">
                            </span>
                        </div>
                        <div class="item-al-description font-normal">Pureed eggplant,garlic,green pepper and tomato dip</div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Aubergine Salad</span>
                            <span id="Price3" class="item-al-price">$5.25
                                <input type="checkbox" id="checkbox_3" onclick="sommePrix()" name="Price" value="5.25">
                            </span>
                        </div>
                        <div class="item-al-description">Pureed eggplant,garlic,green pepper and tomato dip</div>

                    </div>

                    <div id="Salads">

                        <div class="menu-title-container d-flex justify-content-center">
                            <h3 class="gold-color">Salads</h3>
                        </div>
                        <div class="menu-title-container d-flex justify-content-center">
                            <img class="img-fluid"src="/images/dividerreussi.png">
                        </div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Olive Special</span>
                            <span id="Price4" class="item-al-price">$6.00
                                <input type="checkbox" id="checkbox_4" onclick="sommePrix()" name="Price" value="6.00">
                            </span>
                        </div>
                        <div id="olive-special-description" class="item-al-description">
                            Refreshing traditional cucumber and garlic yoghurt dip
                        </div>
                        <div  id="special1-box" class="container">
                            <div  class="row justify-content-end">

                                <span id="special1" class="col-2">Special</span>

                            </div>
                        </div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Greek Salad</span>
                            <span id="Price5" class="item-al-price">$5.50  
                                <input type="checkbox" id="checkbox_5" onclick="sommePrix()" name="Price" value="5.50">
                            </span>
                        </div>
                        <div class="item-al-description">
                            Pureed eggplant,garlic,green pepper and tomato dip
                        </div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <span class="item-al-title">Greek Salad</span>
                            <span id="Price6" class="item-al-price">$5.25
                                <input type="checkbox" id="checkbox_6" onclick="sommePrix()" name="Price" value="5.25">
                            </span>
                        </div>    
                        <div class="item-al-description">
                            Pureed eggplant,garlic,green pepper and tomato dip
                        </div>
                    </div>
                </div>
            
                <!-- cet espace me permet de garder un espace entre les deux colonnes -->
                <div id="espace" class="col-1"></div>
                    <!-- le div suivant repr??sente la deuxieme colonne --------------------------------------------------------->
                <div id="starters-menu"class="col-lg-3 col-10">
    
                <div id="starters" class="Starters">

                    <div class="menu-title-container d-flex justify-content-center">
                    <h3 class="gold-color">Starters</h3>
                    </div>
                    <div class="menu-title-container d-flex justify-content-center">
                        <img class="img-fluid"src="/images/dividerreussi.png">
                    </div>
                    <div class="item-al d-flex justify-content-between gold-color">
                        <span class="item-al-title">Haloumi</span>
                        <span id="Price7" class="item-al-price">$4.00
                            <input type="checkbox" id="checkbox_7" onclick="sommePrix()" name="Price" value="4.00">
                        </span>
                    </div>
                    <div class="item-al-description">
                        Refreshing traditional cucumber and garlic yoghurt dip
                    </div>
                    <div class="item-al d-flex justify-content-between gold-color">
                        <span class="item-al-title">Spinach pie</span>
                        <span id="Price8" class="item-al-price">$5.50
                            <input type="checkbox" id="checkbox_8" onclick="sommePrix()" name="Price" value="5.50">
                        </span>
                    </div>
                    <div class="item-al-description">
                        Pureed eggplant,garlic,green pepper and tomato dip
                    </div>

                </div>

                <div id="main-dishes">

                    <div class="menu-title-container d-flex justify-content-center">
                        <h3 class="gold-color">Main Dishes</h3>
                    </div>
                    <div class="menu-title-container d-flex justify-content-center">
                        <img class="img-fluid"src="/images/dividerreussi.png">
                    </div>
                    <div class="item-al d-flex justify-content-between gold-color">
                        <span class="item-al-title">Cornish Mackerel</span>
                        <span id="Price9" class="item-al-price">$6.00
                            <input type="checkbox" id="checkbox_9" onclick="sommePrix()" name="Price" value="6.00">
                        </span>
                    </div>
                    <div id="item-al-mackerel" class="item-al-description">
                        Refreshing traditional cucumber and garlic yoghurt dip
                    </div>
                    <div id="special-price2">

                        <div id="special2-box" class="container">
                            <div class="row justify-content-end">
                                <span id="special-calque2" class="col-2">Special</span>
                            </div>
                        </div>
                        <div class="item-al d-flex justify-content-between gold-color">
                            <label for="checkbox9_id" id="roast-lamb-title" class="item-al-title">Roast Lamb</label>
                            <span id="Price10" class="item-al-price">$5.50
                                <input type="checkbox" id="checkbox_10" onclick="sommePrix()" name="Price" value="5.50">
                            </span>

                        </div>
                        <div class="item-al-description">
                            Pureed eggplant,garlic,green pepper and tomato dip
                        </div>

                    </div>

                    <div class="item-al d-flex justify-content-between gold-color">
                        <span id="Price11" class="item-al-title">Fried Chicken</span>
                        <span class="item-al-price">$5.25
                            <input type="checkbox" onclick="sommePrix()" name="Price" id="checkbox_11" value="5.25">
                        </span>
                        
                    </div>
                    <div class="item-al-description">
                        Pureed eggplant,garlic,green pepper and tomato dip
                    </div>
                    <div class="item-al d-flex justify-content-between gold-color">
                        <span id="Price12" class="item-al-title">Pastitsio</span>
                        <span class="item-al-price">$6.00
                            <input type="checkbox" id="checkbox_12" onclick="sommePrix()" name="Price" value="6.00">
                        </span>
                    </div>
                    <div class="item-al-description">
                        Refreshing traditional cucumber and garlic yoghurt dip
                    </div>
                    <div class="row align-items-center" id="resultat" style="border-style:ridge; border-color:rgb(200, 159, 45);"></div>
                </div>
                <div class= "buttonDiv">
                    <input type="button" class="button" value="Calculate Total" id="calcButton" onclick="afficherPrix()">
                    </div>
                    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="ticket" data-bs-content="Voici le ticket de votre selection">Afficher le ticket</button>

            </div>
        </section>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
    

    <section id="reviews" class="img-fluid plat">

        <div  class="w-100 container espace-blanc"></div>
        
            <div class="card-body bg-image d-flex justify-content-center">

                <div class="row d-flex justify-content-center">

                        <!--image texte Background-->

                    <div id="img-card" class="card col-10 col-lg-6 bg-transparent text-center text-white d-flex justify-content-center">

                        <h1 class="card-title fw-bold pt-3 mb-5">
                            Guest Reviews
                        </h1>
                        <!--image ornement divided-->

                        <div class="card-img mt-5">
                            <img src="images/Divider Fusionn??s.png" alt="ornement de s??paration">
                        </div>

                        <div class="row d-flex justify-content-center">

                            <p class="card-text fs-3 fw-bold col-11 py-5 px-5 lh-lg">
                            
                                <span style="font-size: 1000px;" id="quoteMark" class="h1 fs-1 fw-bold ms-0">&ldquo;</span> 
                                If you've been to one of our restaurants, you've seen &#150; and tasted &#150; what keeps our customers coming back for more. Perfect materials and freshly backed food, delicious Lambda cakes, muffins and gourmet coffees make us hard to resist! Stop in today and check us out!

                            </p>

                        </div>
                        
                        <p id="bottom-card" class="card-text">
                            - food inc, New York
                        </p>

                    </div>

                </div> 

            </div>

        </div>

    </section>
  
    <!--Background image-->
    <section class="bg-image img-fluid" id="background">

        <!--Deux image gauche centre-->
        <section class="container pt-5">

            <div  class="row gap">

                <div class="col-12 col-xl-6 d-flex justify-content-center">

                    <div class="row">

                        <img class="col-6 img-fluid" src="img/viande.jpg" alt="plat viande">

                        <img class="col-6 img-fluid" src="img/gateaux.jpg" alt=" plat crumble">

                    </div>

                </div>

                <!--card pour le texte et le formulaire-->
                <div id="reservations" class="reservations" class="col-12 col-xl-5">

                    <div class="card bg-transparent">

                        <div id="card" class="card-body text-center pt-0">
                                
                            <h1 class="card-title fw-bold display-5">Just the right food</h1>

                            <img id="divider1" class="card-img pt-1 pb-4" src="img/divider.png" alt="divider">

                            <p class="card-text">
                                If you've been to one of our restaurant, you've seen - and tasted - what keeps our customers coming back for more. Perfect materials and freshly baked food.
                            </p>

                            <p class="card-text">
                                Delicious Lambda cakes, muffins, and gourmets coffees make us hard to resist! Stop in today and check us out! Perfect materials and freshly baked food.
                            </p>

                        </div>

                    </div>

                    <!--Formulaire-->
                    <form class="row d-flex justify-content-center gx-0" action="index.php" method="post">

                        <div class="reserv col-12 col-md-5 me-4 pb-3 form-group">

                            <label for="name">
                                Nom complet
                            </label>

                            <input type="text" class="form-control" placeholder="Votre pr??nom et votre nom" name="name">

                        </div>

                        <div class="col-12 col-md-5 pb-3 form-group">

                            <label for="email">
                                E-mail
                            </label>

                            <input type="text" class="form-control" placeholder="Votre adresse ??lectronique" name="name">

                        </div>

                        
                    </form>

                    <!--Button doree-->
                    <div class="row d -flex justify-content-center pt-5">
<!--                        <button id="btn-reservation" class="btn btn-transparent col-6 fs-5 mb-5 text-white">Envoyer</button>-->
                        <input id="btn-reservation" class="btn btn-transparent col-6 fs-5 mb-5 text-white" id="submit" type="submit" value="Envoyer">
                    </div>
                    
                    <div class="c100" id="submit">
				       <input type="submit" value="Envoyer">
			        </div>

                </div>

            </div>

        </section>

    </section>

    <section>
        <!-- le footer commence ici -->
        <footer>
            <div class="container">

                <!-- le container principal du footer -->
                <div class="row justify-content-evenly">
    
                    <!-- colonne 1 -->
                    <!--Revise code erreur!-->
                    <div class="col-10 col-md-3 ">
                        <div id="about-us">
        
                            <h3 class="h3footer">About Us</h3>
                        
                            <div class="img-box">
                                <img class="img-fluid" src="/images/divider-footer.png">
                            </div>
        
                            
        
                        </div>
        
                        <p class="p-footer" id="p-special-footer">
                            Lambda's new and expanded Chelsea location represents a truly authentic <strong>Greek </strong>
                            patisserie, featuring breakfast of fresh croissants and steaming bowls of caf??.
                            <br>Lambda the best restaurant in town
                        </p>
                    </div>
    
                
    
                <!-- colonne 2 -->
    
                    <div id="openning-hours" class="col-10 col-md-3 ">
    
                        <h3 class="h3footer">Openning Hours</h3>
    
                        <div class="img-box">
    
                            <img class="img-fluid"  src="/images/divider-footer.png">
    
                        </div>
    
                        <p class="p-footer"><strong>Mon-Thu:</strong>
                            7:00am-8:00pm
                        </p>
                        <p class="p-footer"><strong>Fri-Sun:</strong>
                            7:00am-10:00pm 
                        </p>
                        <div>
                            <img class="footer-img img-fluid" src="/images/cards.png">
                        </div>
    
                    </div>
    
                    <!-- colonne 3 -->
                    <div id="our-location" class="col-10 col-md-3 ">
    
                        <h3 class="h3footer">Our Location</h3>
    
                        <div class="img-box">
    
                            <img  class="img-fluid"src="/images/divider-footer.png">
    
                        </div>
    
                        <p class="p-footer">
                            19th Paradise Streets Sitia
                        </p>
                        <p class="p-footer">
                            128 Meserole Avenue
                        </p>
                        <div >
                            <img class="footer-img img-fluid" src="/images/social-icon.png">
                        </div>
                        
                    </div>
                </div>
            </div>

        </footer>

    </section>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--    <script src="navigation.js"> </script>-->
</body>
</html>
    

 

