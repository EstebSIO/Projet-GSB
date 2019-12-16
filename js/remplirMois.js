/*var visiteur = document.getElementById("lstVisiteur");
 visiteur.addEventListener('change', function() {
       hydrater();
   });

 function hydrater(){
     var idVisiteur = document.getElementById("lstVisiteur").value;
     var data={idVisiteur};
     var lstMois = document.getElementById("lstMois");
     lstMois.innerHTML='';
     $.ajax({
         type : "POST",
         url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
         data: data,
         success : function(response){
             $('#lstMois').append(response);
             console.log(response);
         },
         error : function(){
             console.log('error');
         }
     });    
 }*/
 
 $(document).ready(function(){
    $('#lstVisiteur').change(function(){
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var data={idVisiteur};
        var lstMois = document.getElementById("lstMois");
        lstMois.innerHTML='';
        $.ajax({
            type : "POST",
            url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
            data: data,
            success : function(response){

                $('#containerMois').html($(response).find('#lstMois'));
                                remove($('#lstMois'));
                console.log(response);
            },
            error : function(){
                console.log('error');
            }
        });  
    })
 })