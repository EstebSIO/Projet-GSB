$(document).ready(function(){
    $('#lstVisiteur').change(function(){
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var data={idVisiteur};
        $.ajax({
            type : "POST",
            url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
            data: data,
            success : function(response){
                $('#lstMois').remove();
                $('#containerMois').html($(response).find('#lstMois'));
                if(!$('#lstMois').find('option').html() && $('#lstVisiteur').val()!=="selection"){
                    var erreur = document.createElement("p");
                    erreur.setAttribute("class", "alert alert-danger");
                    var contenu = document.createTextNode("Pas de Mois à afficher.");
                    erreur.appendChild(contenu);
                    $('#containerMois').append(erreur);
                }
            },
            error : function(){
                console.log("erreur lors de l'envoi de l'id visiteur.");
            }
        });
    });
});