// ----------------Création de la variable et écoute du clique
//-----------------Création de la variable contenant la destination.
//-----------------Scroll de destination

let linkhome = document.getElementById("linkhome");
linkhome.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let home = document.getElementById("home");
  home.scrollIntoView({ behavior: "smooth"});
});

let linkabout = document.getElementById("linkabout");
linkabout.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let about = document.getElementById("about");
  about.scrollIntoView({ behavior: "smooth"});
});

let linkingredients = document.getElementById("linkingredients");
linkingredients.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let ingredients = document.getElementById("ingredients");
  ingredients.scrollIntoView({ behavior: "smooth"});
});

let linkmenu = document.getElementById("linkmenu");
linkmenu.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let menu = document.getElementById("menu");
  menu.scrollIntoView({ behavior: "smooth"});
});

let linkreviews = document.getElementById("linkreviews");
linkreviews.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let reviews = document.getElementById("reviews");
  reviews.scrollIntoView({ behavior: "smooth"});
});

let linkreservations = document.getElementById("linkreservations");
linkreservations.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let reservations = document.getElementById("reservations");
  reservations.scrollIntoView({ behavior: "smooth"});
});


function sommePrix(){

    let resultat = document.getElementById('resultat').innerText; //Declaration de la variable resultat 
    resultat.innerHTML = parseFloat(resultat)//Declare que la variable resultat en chiffre a virgule
    let Montableau = document.getElementsByName('Price')//Créé un tableau avec toutes les check box
    // Montableau = parseFloat(Montableau.value)
    let totalPrix = 0//On initialise 

   for ( i = 0; i < Montableau.length; i++) {//Boucle qui parcourt le tableau 
        if (Montableau[i].checked){//Vérifie si la check box est checker 
        totalPrix += parseFloat(Montableau[i].value)//Si "oui" ajouter la valeure du tableau a "total prix"
        }

   }
   return totalPrix//Retourne le total
}
function afficherPrix(){//onction qui va appeller la fonction SommePrix
    total = sommePrix()//
    resultat.innerText = total + ' CHF'//Remplace la <div resultat> par le total + CHF
   }
