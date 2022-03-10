// let a = document.getElementsByClassName('link-home');

// for (let a of array) {
//   a.addEventListener("click", clickHandler);
// }



// let a = document.getElementById('reservations').scrollIntoView();

// for ("reservations") {
// a.addEventListener("click", clickHandler)};

// let element = document.getElementsByClassName("link");


// const tableaudeLiens = document.getElementsByClassName("nav-link").scrollIntoView();

// for (item of tableaudeLiens) {
//     item.addEventListener("click", function(e) {
//         console.log('click', e.target.id);
//     })
// }

// let element = document.getElementById("home");

// element.addEventListener("click", clickHandler);

// element.scrollIntoView();
// element.scrollIntoView(false);
// element.scrollIntoView({block: "end"});
// element.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
  });


let linkhome = document.getElementById("linkhome");
linkhome.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let home = document.getElementById("home");
  home.scrollIntoView();
  home.scrollIntoView(false);
  home.scrollIntoView({ block: "end" });
  home.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});

let linkabout = document.getElementById("linkabout");
linkabout.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let about = document.getElementById("about");
  about.scrollIntoView();
  about.scrollIntoView(false);
  about.scrollIntoView({ block: "end" });
  about.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});

let linkingredients = document.getElementById("linkingredients");
linkingredients.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let ingredients = document.getElementById("ingredients");
  ingredients.scrollIntoView();
  ingredients.scrollIntoView(false);
  ingredients.scrollIntoView({ block: "end" });
  ingredients.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});

let linkmenu = document.getElementById("linkmenu");
linkmenu.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let menu = document.getElementById("menu");
  menu.scrollIntoView();
  menu.scrollIntoView(false);
  menu.scrollIntoView({ block: "end" });
  menu.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});

let linkreviews = document.getElementById("linkreviews");
linkreviews.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let reviews = document.getElementById("reviews");
  reviews.scrollIntoView();
  reviews.scrollIntoView(false);
  reviews.scrollIntoView({ block: "end" });
  reviews.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});

let linkreservations = document.getElementById("linkreservations");
linkreservations.addEventListener("click", function (e) {
  console.log('click', e.target.id);
  let reservations = document.getElementById("reservations");
  reservations.scrollIntoView();
  reservations.scrollIntoView(false);
  reservations.scrollIntoView({ block: "end" });
  reservations.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
});


function sommePrix(){

    let resultat = document.getElementById('resultat').innerText;
    resultat.innerHTML = parseFloat(resultat)
    let Montableau = document.getElementsByName('Price')
    // Montableau = parseFloat(Montableau.value)
    let totalPrix = 0

   for ( i = 0; i < Montableau.length; i++) {
        if (Montableau[i].checked){
        totalPrix += parseFloat(Montableau[i].value)
        resultat.innerText = totalPrix

        }

    else {
        document.getElementById('resultat').innerText = ""
    }

   }
   console.log(totalPrix)
   return totalPrix
}


total = resultat

console.log()

function afficherPrix(){
    total = sommePrix()
    resultat.innerText = total + ' CHF'
   }
