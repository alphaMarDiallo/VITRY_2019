// On selectionne le DOM auquel on associe la méthode 'ready' qui executera la fonction une fois que le DOM sera chargé complètement
$(document).ready(function(){
    // On selectionne le bouton submit auquel on associe l'évènement 'click'
    // 'event' représente l'évènement 'click'
    $('#submit').click(function(event){
        event.preventDefault(); // preventDefault() fonction prédéfinie permet d'annuler le comportement du bouton submit qui a pour role de recharger le code / la page   
        ajax(); // fonction utilisateur executée ci-dessous
    });

    function ajax()
    {
        var personne = $('#personne').val(); // on selectionne le champs input afin de récupérer la valeur saisie dans le champ pour la transmettre à la requete 'aller' AJAX
        console.log(personne);

        var parameters = "personne="+personne; // on définit le paramètres à envoyer avec la requete 'aller' AJAX 
        // "personne=" permet de définir où le paramètre va être envoyé dans le fichier PHP ($personne)
        console.log(parameters);

        // la méthode 'post' de JQUERY permet d'envoyer des requetes HTTP AJAX , plusieurs paramètres:
        /* 
            1. L'URL de destination des requetes AJAX
            2. Les paramètres à fournir à la requète
            3. En cas de succés, function(data) recupère les données de la requete 'retour', tout se trouve dans 'data'
            4. Type de transport de données : JSON
        */
        $.post("ajax2.php", parameters, function(data){
            $('#resultat').html(data.resultat); // on selectionne la div id  'resultat' et on accroche le message d'erreur ou de validation à l'intérieur 
            // data.resultat --> resultat correspond à l'indice 'resultat' du tableau array $tab['resultat'] du fichier ajax2.php
            $('#personne').val(''); // permet de vider le champs input une fois le formulaire validé
        }, 'json');
    }
});