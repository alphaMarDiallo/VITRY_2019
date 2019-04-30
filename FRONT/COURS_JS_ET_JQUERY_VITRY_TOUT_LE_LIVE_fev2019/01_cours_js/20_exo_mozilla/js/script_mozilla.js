// alert("OK !");

// fonction qui va switcher l'image lorsqu'on clique dessus

// on stocke dans la variable monImage la première image du document
// querySelectorAll récupérerait toutes les img

var monImage = document.querySelector('img');

// équivalent à querySelector : var monImage = document.querySelectorAll('img')[0];

console.log(monImage);

// On va utiliser la méthode addEventListener pour pour ajouter un écouteur de click sur l'image
// addEventListener attend 2 paramètres: 
// l'événement (click) et l'action à réaliser lorsque l'événement survient (changer la source de l'image)
monImage.addEventListener('click', function(){

    // récupérer dans une variable maSrc, la valeur actuelle de l'attribut src de monImage. On va utiliser la méthode getAttribute(), l'argument attendu pour cette méthode est le nom d'un attribut de balise html (ici ça sera src)
    
    // alert('click');

    var maSrc = monImage.getAttribute('src');
    console.log(maSrc);


// SI (la valeur de la variable maSrc est égale à 'images/logo_firefox1.png')
// ALORS
// alert("je suis l'image 1")
//  SINON
// alert(maSrc + "n'est pas l'image 1")

// première version de cette condition pour tester

/* 
if(condition){
    instruction 1;
}
else{
    instruction 2;
}
*/

/*
    if (maSrc === 'images/logo_firefox_1.png') {
        alert("Je suis l'image 1,  ma source est : " + maSrc);
    }
    else {
        alert("Je ne suis pas l'image 1, ma source est : " + maSrc);
    }
*/
// SECONDE VERSION : ici on va intervertir les images avec la méthode setAttribute qui attend 2 arguments : 
// 1: l'attribut ciblé (ici ça sera src)
// 2: sa nouvelle valeur (ici ça sera images/logo_firefox_2.png)
// on veut remplacer la source par la source de la 2eme image

    if (maSrc === 'images/logo_firefox_1.png') {
        // alert("Je suis l'image 1,  ma source est : " + maSrc);
        // ici on veut remplacer la source par la source de la 2eme image
        monImage.setAttribute('src', 'images/logo_firefox_2.png');
    }
    else {
        // alert("Je ne suis pas l'image 1, ma source est : " + maSrc);
        // ici on veut remplacer la source par la source de la 1ere image
        monImage.setAttribute('src', 'images/logo_firefox_1.png');
    }
}); // FIN DE LA FONCTION D'INVERSION DES IMAGES
    /*
    Dans le code précédent on a fait :
    1/ Quand on clique sur l'imahge (dans la fonction addEventListener)
    2/ On a utilisé la structure conditionnelle if else pour voir si la valeur de l'attribut src est est égale au chemin de l'image originale
    3/ Si c'est la cas, on change la valeur de cet attribut en lui indiquant le chemin vers la seconde image
    4/ Si ça n'est pas le cas (ce qui signifie que l'image a été changée), la valeur de l'attribut src revient à sa valeur initiale
    */

    /* Prochaine recette (fonction) : ajouter un massage d'accueil personnalisé
    On va changer le titre de la page pour inclure un message pour le visiteur du site
    Ce message sera conservé quand l'utilisateur quittera le site et si il y revient plus tard.
    On va conserver ce massage dans le cache du navigateur en utilisant l'API Webstorage
    Au final, on ajoutera une option sur le bouton, pour pouvoir changer l'utilisateur et le message d'accueil si besoin
    */
// 1ere étape : récupérer dans une variable monTitre le 1er h1 du document et l'affiche ne console

var monTitre = document.querySelector('h1');
console.log(monTitre);

// 2eme étape : récupérer dans une variable monBouton la première balise button du document

var monBouton = document.querySelector('button');
console.log(monBouton);

// Prépare la fonction du message d'accueil (qui sera invoquée, déclenchée plus tard)

function definirNomUtilisateur(){
    var monNom = prompt('Ecris ton prénom');
    localStorage.setItem('nomUtilisateur', monNom);
    monTitre.textContent = "Bienvenue" + monNom;
}
/* EXPLICATION DE LA FONCTION :
Cette fonction utilise la méthiode prompt() qui affiche une boite de dialogue, un peu comme une alrt(), sauf qu'elle permet à l'utilisateur de saisir des données et des les enregistrer dans une variable quand l'utilisateur clique sur OK
Dans notre exemple on demande à l'utilisateur de saisir son nom
Ensuite nous appelons l'API localStorage qui permet de stocker des données dans le navigateur pour pouvoir les réutiliser ultérieurement.
Nous utilisons la fonction setItem de cet API pouer stocker la donnée qui nous intéresse dans un conteneur appelé nomUtilisateur.La valeur stockée ici est la valeur de la variable monNom qui contient le nom saisi par l'utilisateur dans le prompt.
Au final on utilise la propriété textContent du titrre pour lui affecter un nouveau contenu.

*/

// La suite va être : tester si le nom n'est pas dans le cache. 
// S'il n'y est pas, on demande avec prompt son nom à l'utilisateur (déclenche la fonction definirNomUtilisateur)
// Si il y est, si le nom est déjà dans le cache, on le récupère et on l'affiche dans le titre

// pour tester : vider le localStorage
// localStorage.clear();

if (!localStorage.getItem('nomUtilisateur')){
    alert('le cache est vidé');
    definirNomUtilisateur();
}
else{
    var nomEnregistre = localStorage.getItem('nomUtilisateur');
    monTitre.textContent = "Bienvenue à nouveau " + nomEnregistre;
}

// Au clic sur le bouton, invoquer la fonction definirNomUtilisateur()

monBouton.addEventListener('click', function(){
    definirNomUtilisateur();
})

// Le bloc de la conditionnelle if else utilise l'opérateur de négation NON (le point d'exclamation) pour vérifier si le navigateur possède une donnée enregistrée appelée nomUtiolisateur ou pas.
// Sinon, la fonction definirNomUtilisateur() est invoquée pour créeer cette donnée.
// Si elle existe (ce qui correspond au cas ou l'utilisateur est déjà venu sur la page, on la récupère avec la méthode getItem(). Pour finir On définit le contenu de textContent pour le titre avec une concanénation de chaîne suivie du nom de l'utilisateur. 
// Enfin, on associe le gestionnaire d'événement click au bouton. Quand l'utilisateur cliquera sur le bouton, ça déclenchera l'éxécution de la fonction definirNomUtilisateur();
// Ce bouton permet donc à l'utilisateur de modifier sonn nom s'il le souhaite.

