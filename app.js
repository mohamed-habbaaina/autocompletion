const searchInput = document.querySelector('#search');  //  géré l'input
const searchButton = document.querySelector('#btn');    //  géré le button
const form = document.getElementById('form');   //  géré le formulaire
let result = document.querySelector('#result'); //  géré l'affichage de resultat

//************  function pour récupérer la data "Fetch" appartir de la BD, et créée des "li" pour laffichage des resultats */
let handleSearch = async (nom) => {

    await fetch('recherche.php?search=' + nom)  //  recupérer la data apartir de la page recherche.php "methode GET"
    .then(res => res.json())

    .then(data => {

        result.innerHTML = '';  //  pour effacer l'affichage de result precedent  

        for(let item of data){  //  parcurir le tableau de resultat

            let li = document.createElement("li");  // ? créée un "li"
            li.setAttribute("class", "affich"); //  atribuer une classe a l'element "li"
            li.textContent = item.nom;  // Afficher le "nom" dans l'objet data
            li.dataset.id = item.id;    // ! recupérer et stocké "id" pour l'utiliser dans la création de $_GET['id'] dans la fonction "handleResultClick"
            result.appendChild(li);     // ? ajout li dans result pour l'affichage
            li.onclick = (e) => handleResultClick(e); // !  pour géré le click sur le resultat
        }

    })
    .catch(error => console.log('Error: '+ error));
};

/****************      fonction pour géré le click sur le button    */
let handleResultClick = (e) => {

    let nomElement = e.currentTarget.textContent;   //  return  "nom"
    let idElement = e.currentTarget.dataset.id; //  return  "id"

    searchInput.value = nomElement; //  mettre le nom dans "searchInput"
    result.innerHTML = ''; //   et vider l'affichage de resultat au meme tempt

    searchButton.disabled = false;  //  réactiver le button btn

    form.action = `element.php?id=${idElement}`; // ! créée URL pour la redirection vers la page element.php avec un $_GET['id']

    console.log(form.action)
}

// le addEventListener "submit" pour rediriger vers element.php
form.addEventListener('submit', (e) => {
    
        e.preventDefault();
    
        location.href = e.currentTarget.action; // ? redirection
    });
    
    
    /*************  Ecouter input  */
searchInput.addEventListener("input", async function(e){

    let nom = e.currentTarget.value.toUpperCase();  //  mettre le text on majuscule par rapport a la base de données
    
    await handleSearch(nom);    // ? appeler la fonction "handleSearch"

})


