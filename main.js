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