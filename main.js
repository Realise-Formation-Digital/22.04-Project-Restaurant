// Les erreurs après présentation sont passées en commentaires

// Tentative d'optimisation du code en utilisant des listes



//------------création de tableau et récupération du clique

// const tableaudeLiens = document.getElementsByClassName("nav-link");

// for (element of tableaudeLiens) {

// console.log(element)

//     element.addEventListener("click", function (e) {
//         console.log('click', e.target.id)

//------------Tentative de faire le lien de destination (pas trouvé du tout)        

        // let destination = element.id[i]
        // console.log(destination)
        
//------------Scroll

//         destination.scrollIntoView();
//         destination.scrollIntoView(false);
//         destination.scrollIntoView({block: "end"});
//         destination.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
// })
// }

  




// Ancien code fuctionnel

// ----------------Création de la variable et écoute du clique

     let stock = document.getElementById("home");

     stock.addEventListener("click", function(e) {
//  
//-----------------Création de la variable contenant la destination.

        let destination = document.getElementById("about-us");

//-----------------Scroll de destination

        // destination.scrollIntoView(); inutile
        // destination.scrollIntoView(false); inutile
        // destination.scrollIntoView({block: "end"}); inutile 
        destination.scrollIntoView({behavior: "smooth" });
        
        // console.log('click', e.target.id);
    })


